<?php
// src/Service/FileUploader.php
namespace App\Service;

use App\Entity\Attachment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader
{
	private $slugger;
	private $entityManager;

	public function __construct(SluggerInterface $slugger, EntityManagerInterface $entityManager)
	{
		$this->slugger = $slugger;
		$this->entityManager = $entityManager;
	}

	public function upload(UploadedFile $file, $destination, $entity, $mapped, $sorting)
	{
		$originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
		$safeFilename = $this->slugger->slug($originalFilename);
		$fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
		try {
			$file->move($destination, $fileName);
		} catch (FileException $e) {
			dump($e);
		}
		if (count($entity->getMyFiles()) > 0){
			$query = $this->entityManager->createQuery(
				'SELECT MAX(a.sorting)
				FROM App\Entity\Attachment a
				WHERE a.'.$mapped.' ='.$entity->getId()
			);
			$sorting = $query->getResult()[0][1] + $sorting;
		}
		$attachment = new Attachment();
		$attachment->setSorting($sorting);
		$attachment->setImageFile($fileName);
		return $attachment;
	}
}
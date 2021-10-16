<?php
// src/Service/FileUploader.php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader
{
	private $slugger;

	public function __construct(SluggerInterface $slugger)
	{
		$this->slugger = $slugger;
	}

	public function upload(UploadedFile $file, $destination)
	{
		$originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
		$safeFilename = $this->slugger->slug($originalFilename);
		$fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();

		try {
			$file->move($destination, $fileName);
		} catch (FileException $e) {
			// ... handle exception if something happens during file upload
		}

		return $fileName;
	}
}
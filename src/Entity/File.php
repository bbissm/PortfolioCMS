<?php

namespace App\Entity;

use App\Repository\FileRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Hobby;
/**
 * @ORM\Entity(repositoryClass=FileRepository::class)
 */
class File
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="path", type="string", length=255)
	 */
	private $path;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	private $name;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="size", type="integer")
	 */
	private $size;

	/**
	 * @var UploadedFile
	 */
	private $file;

	/**
	 * @ORM\ManyToOne(targetEntity="Hobby", inversedBy="files")
	 * @ORM\JoinColumn(name="hobby_id", referencedColumnName="id")
	 **/
	private $document;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getDocument(): ?Document
    {
        return $this->document;
    }

    public function setDocument(?Document $document): self
    {
        $this->document = $document;

        return $this;
    }
}

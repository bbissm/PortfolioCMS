<?php

namespace App\Entity;

use App\Repository\AttachmentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use App\Entity\Hobby;
/**
 * @ORM\Entity(repositoryClass=AttachmentRepository::class)
 * @Vich\Uploadable
 */
class Attachment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageFile;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Hobby", inversedBy="my_files")
	 * @ORM\JoinColumn(name="hobby_id", referencedColumnName="id")
	 */
	private $hobby;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Project", inversedBy="my_files")
	 * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
	 */
	private $project;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Content", inversedBy="my_files")
	 * @ORM\JoinColumn(nullable=true)
	 */
	private $content;

	/**
	 * @ORM\Column(type="integer", nullable=true)
	 */
	public $sorting;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $updatedAt;


    public function __construct()
    {
        $this->updatedAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getHobbyId(): ?int
    {
        return $this->hobby_id;
    }

    public function setHobbyId(int $hobby_id): self
    {
        $this->hobby_id = $hobby_id;

        return $this;
    }

    public function getImageFile(): ?string
    {
        return $this->imageFile;
    }

    public function setImageFile(?string $imageFile): self
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    public function getSorting(): ?int
    {
        return $this->sorting;
    }

    public function setSorting(int $sorting): self
    {
        $this->sorting = $sorting;

        return $this;
    }

    public function getProjectId(): ?int
    {
        return $this->project_id;
    }

    public function setProjectId(?int $project_id): self
    {
        $this->project_id = $project_id;

        return $this;
    }

    public function getContentId(): ?int
    {
        return $this->content_id;
    }

    public function setContentId(?int $content_id): self
    {
        $this->content_id = $content_id;

        return $this;
    }

    public function getContent(): ?Content
    {
        return $this->content;
    }

    public function setContent(?Content $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getHobby(): ?Hobby
    {
        return $this->hobby;
    }

    public function setHobby(?Hobby $hobby): self
    {
        $this->hobby = $hobby;

        return $this;
    }

}

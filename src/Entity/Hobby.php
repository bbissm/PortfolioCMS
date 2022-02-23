<?php

namespace App\Entity;

use App\Entity\Attachment;
use App\Repository\HobbyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass=HobbyRepository::class)
 */
class Hobby
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	private $active;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Attachment", mappedBy="hobby", cascade={"persist"})
	 */
	private $my_files;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

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
  		$this->my_files = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    /**
     * @return Collection|Attachment[]
     */
    public function getMyFiles(): Collection
    {
        return $this->my_files;
    }

    public function addMyFile(Attachment $myFile): self
    {
        if (!$this->my_files->contains($myFile)) {
            $this->my_files[] = $myFile;
            $myFile->setHobby($this);
        }

        return $this;
    }

    public function removeMyFile(Attachment $myFile): self
    {
        if ($this->my_files->removeElement($myFile)) {
            // set the owning side to null (unless already changed)
            if ($myFile->getHobby() === $this) {
                $myFile->setHobby(null);
            }
        }

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getSorting(): ?int
    {
        return $this->sorting;
    }

    public function setSorting(?int $sorting): self
    {
        $this->sorting = $sorting;

        return $this;
    }
}

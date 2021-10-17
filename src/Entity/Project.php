<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 */
	private $title;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $description;

	/**
	 * @ORM\Column(type="array", nullable=true)
	 */
	private $skills;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Attachment", mappedBy="project", cascade={"persist"})
	 */
	private $my_files;

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

    public function setTitle(?string $title): self
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

    public function getSkills(): ?array
    {
        return $this->skills;
    }

    public function setSkills(?array $skills): self
    {
        $this->skills = $skills;

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
            $myFile->setProject($this);
        }

        return $this;
    }

    public function removeMyFile(Attachment $myFile): self
    {
        if ($this->my_files->removeElement($myFile)) {
            // set the owning side to null (unless already changed)
            if ($myFile->getProject() === $this) {
                $myFile->setProject(null);
            }
        }

        return $this;
    }
}

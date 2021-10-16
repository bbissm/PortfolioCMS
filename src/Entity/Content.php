<?php

namespace App\Entity;

use App\Repository\ContentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Collection;

/**
 * @ORM\Entity(repositoryClass=ContentRepository::class)
 */
class Content
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
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $text;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Attachment", mappedBy="content", cascade={"persist"})
	 */
	private $my_files;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Section", inversedBy="content")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $section;


	public function __construct(Section $section = null)
            	{
            		$this->section = $section;
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

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getSection(): ?Section
    {
        return $this->section;
    }

    public function setSection(?Section $section): self
    {
        $this->section = $section;

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
     * @return \Doctrine\Common\Collections\Collection|Attachment[]
     */
    public function getFiles(): \Doctrine\Common\Collections\Collection
    {
        return $this->files;
    }

    public function addFile(Attachment $file): self
    {
        if (!$this->files->contains($file)) {
            $this->files[] = $file;
            $file->setContent($this);
        }

        return $this;
    }

    public function removeFile(Attachment $file): self
    {
        if ($this->files->removeElement($file)) {
            // set the owning side to null (unless already changed)
            if ($file->getContent() === $this) {
                $file->setContent(null);
            }
        }

        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection|Attachment[]
     */
    public function getMyFiles(): \Doctrine\Common\Collections\Collection
    {
        return $this->my_files;
    }

    public function addMyFile(Attachment $myFile): self
    {
        if (!$this->my_files->contains($myFile)) {
            $this->my_files[] = $myFile;
            $myFile->setContentId($this);
        }

        return $this;
    }

    public function removeMyFile(Attachment $myFile): self
    {
        if ($this->my_files->removeElement($myFile)) {
            // set the owning side to null (unless already changed)
            if ($myFile->getContentId() === $this) {
                $myFile->setContentId(null);
            }
        }

        return $this;
    }

}

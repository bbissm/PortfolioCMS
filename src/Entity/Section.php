<?php

namespace App\Entity;

use App\Repository\SectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SectionRepository::class)
 */
class Section
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
    private $active = true;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $template;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $sorting;

	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Content", mappedBy="section", cascade={"persist"})
	 */
	private $content;

	public function __construct()
	{
		$this->content = new ArrayCollection();
	}

	/**
	 * @return mixed
	 */
	public function getActive()
	{
		return $this->active;
	}

	/**
	 * @param mixed $active
	 */
	public function setActive($active): void
	{
		$this->active = $active;
	}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setname(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(?string $template): self
    {
        $this->template = $template;

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

    /**
     * @return Collection|Content[]
     */
    public function getContent(): Collection
    {
        return $this->content;
    }

    public function addContent(Content $content): self
    {
        if (!$this->content->contains($content)) {
            $this->content[] = $content;
            $content->setSection($this);
        }

        return $this;
    }

    public function removeContent(Content $content): self
    {
        if ($this->content->removeElement($content)) {
            // set the owning side to null (unless already changed)
            if ($content->getSection() === $this) {
                $content->setSection(null);
            }
        }

        return $this;
    }

}

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
class Hobby implements \ArrayAccess
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

	public $attachments;

    public function __construct()
    {
		$this->updatedAt = new \DateTime();
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

	public function offsetExists($offset)
	{
		return property_exists($this, $offset);
		// TODO: Implement offsetExists() method.
	}

	public function offsetGet($offset)
	{
		return $this->$offset;
		// TODO: Implement offsetGet() method.
	}

	public function offsetSet($offset, $value)
	{
		$this->$offset = $value;
		// TODO: Implement offsetSet() method.
	}

	public function offsetUnset($offset)
	{
		unset($this->$offset);
		// TODO: Implement offsetUnset() method.
	}
}

<?php

namespace App\Form\DataTransformer;

use App\Entity\Attachment;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class AttachmentToHobbyTransformer implements DataTransformerInterface
{
	private $doctrine;

	public function __construct(ManagerRegistry $doctrine)
	{
		$this->doctrrine = $doctrine;
	}

	/**
	 * Transforms an object (Attachment) to a string (number).
	 *
	 * @param  Issue|null $issue
	 */
	public function transform($issue): string
	{
		if (null === $issue) {
			return '';
		}

		return $issue->getId();
	}

	/**
	 * Transforms a string (number) to an object (issue).
	 *
	 * @param  string $issueNumber
	 * @throws TransformationFailedException if object (issue) is not found.
	 */
	public function reverseTransform($issueNumber): ?Issue
	{
		// no issue number? It's optional, so that's ok
		if (!$issueNumber) {
			return null;
		}

		$issue = $this->doctrine
			->getRepository(Issue::class)
			// query for the issue with this id
			->find($issueNumber)
		;

		if (null === $issue) {
			// causes a validation error
			// this message is not shown to the user
			// see the invalid_message option
			throw new TransformationFailedException(sprintf(
				'An issue with number "%s" does not exist!',
				$issueNumber
			));
		}

		return $issue;
	}
}
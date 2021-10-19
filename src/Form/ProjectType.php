<?php

namespace App\Form;

use App\Entity\Attachment;
use App\Entity\Project;
use App\Entity\Skill;
use Doctrine\ORM\EntityRepository;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use Liip\ImagineBundle\Form\Type\ImageType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\Dropzone\Form\DropzoneType;
use Vich\UploaderBundle\Form\Type\VichImageType;


class ProjectType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options): void
	{
		$builder
			->add('title', TextType::class)
			->add('description',TextareaType::class, [
				'attr' => ['class' => 'tinymce'],
				'required' => false
			])
			->add('my_files', FileType::class, array(
				'mapped' => false,
				'label' => false,
				'multiple' => true,
				'required' => false
			))
			->add('skills', CollectionType::class, array(
				'entry_type' => SkillFormType::class,
				'label' => false,
				'allow_add' => true,
				'allow_delete' => true,
				'required' => false,
				'by_reference' => false
			))
			->add('save', SubmitType::class)
		;
	}

	public function configureOptions(OptionsResolver $resolver): void
	{
		$resolver->setDefaults([
			'data_class' => Project::class,
		]);
	}
}

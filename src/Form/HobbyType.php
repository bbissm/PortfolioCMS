<?php

namespace App\Form;

use App\Entity\File;
use App\Entity\Attachment;
use App\Entity\Hobby;
use Doctrine\ORM\EntityRepository;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use Liip\ImagineBundle\Form\Type\ImageType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\Dropzone\Form\DropzoneType;
use Vich\UploaderBundle\Form\Type\VichImageType;


class HobbyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
		$builder
			->add('title', TextType::class)
			->add('description',TextType::class)
			->add('my_files', FileType::class, array(
				'mapped' => false,
				'label' => 'Please upload file',
				'multiple' => true,
				'required' => false
			))
			->add('save', SubmitType::class)
		;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hobby::class,
        ]);
    }
}

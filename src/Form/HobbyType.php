<?php

namespace App\Form;

use App\Entity\Hobby;
use Liip\ImagineBundle\Form\Type\ImageType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class HobbyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
		$builder
			->add('active', CheckboxType::class, array(
				'label' => 'Wird im Frontend angezeigt',
				'required' => false,
				'is_granted_attribute' => 'ROLE_DEV',
				'is_granted_disabled' => $options['is_granted_disabled'],
			))
			->add('title', TextType::class)
			->add('description',TextareaType::class, [
				'attr' => ['class' => 'tinymce'],
				'required' => false
			])
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
			'is_granted_disabled' => false
        ]);
    }
}

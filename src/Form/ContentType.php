<?php

namespace App\Form;
use Symfony\Component\Validator\Constraints\File;
use App\Entity\Attachment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Content;
class ContentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('text')
			/*->add('my_files', FileType::class, array(
				'mapped' => false,
				'label' => false,
				'multiple' => true,
				'required' => false,
				'constraints' => [
					new File([
						'maxSize' => '1024k',
						'mimeTypes' => [
							'application/pdf',
							'application/x-pdf',
						],
						'mimeTypesMessage' => 'Please upload a valid PDF document',
					])
				],
			))*/
			->add('imageFile', FileType::class, array(
				'mapped'=> false,
				'label' => false,
				'required' => false,
			))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
			'data_class' => Content::class
        ]);
    }
}

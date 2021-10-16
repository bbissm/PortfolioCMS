<?php

namespace App\Form;

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
			->add('my_files', CollectionType::class, array(
				'entry_type' => AttachmentType::class,
				'entry_options' => ['label' => false],
				'by_reference' => false
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

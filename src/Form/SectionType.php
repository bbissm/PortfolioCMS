<?php

namespace App\Form;

use App\Entity\Section;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SectionType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options): void
    {
		$files = glob('../templates/sections/*.html.twig');
		foreach ($files as $file) {
			$file = str_replace(['../templates/sections/','.html.twig'],'',$file);
			$templates[$file] = $file;
		}
        $builder
			->add('active', CheckboxType::class, array(
				'label' => 'Wird im Frontend angezeigt',
				'required' => false,
				'is_granted_attribute' => 'ROLE_DEV',
				'is_granted_disabled' => $options['is_granted_disabled'],
			))
            ->add('name', null, array(
            	'required' => true
			))
			->add('template', ChoiceType::class, array(
				'choices' => $templates,
				'required' => false
			))
			->add('content', CollectionType::class, [
				'entry_type' => ContentType::class,
				'entry_options' => ['label' => false],
				'allow_add' => true,
				'allow_delete' => true,
				'by_reference' => false
			])
			->add('save', SubmitType::class)
		;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
			'data_class' => Section::class,
			'is_granted_disabled' => false
        ]);
    }
}

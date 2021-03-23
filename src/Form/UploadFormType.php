<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UploadFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('po', TextType::class)
            ->add('lot', TextType::class)
            ->add('format', TextType::class)
            ->add('quantity', TextType::class)
            ->add('weight', TextType::class)
            ->add('photos', FileType::class, [
               
                // unmapped means that this field is not associated to any entity property
                'mapped' => false,

                'required' => false,
                'multiple' => true,

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}

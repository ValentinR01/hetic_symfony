<?php

namespace App\Form;
use App\Entity\Deal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\File;

class DealFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Price', null, ['label' => 'Prix'])
        ->add('Title', null, ['label' => 'Titre'])
        ->add('Description', null, ['label' => 'Description'])
        ->add('Category', null, ['label' => 'Catégorie'])
        ->add('Product_state', null, ['label' => 'Etat']);
        if (!$options){
            $builder
            ->add('MainPhoto', FileType::class, ['label' => 'Photo principale'])
            ->add('Photo_2', FileType::class, array('label' => 'Photo n°2'))
            ->add('Photo_3', FileType::class, array('label' => 'Photo n°3'));
        };
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Deal::class
        ]);
    }
}

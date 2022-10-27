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

class DealFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Price', null, ['label' => 'Prix'])
        ->add('Title', null, ['label' => 'Titre'])
        ->add('Description', null, ['label' => 'Description'])
        ->add('Photo', FileType::class, array('multiple' => true, 'label' => 'Photo (png, jpeg)'))
            #->add('Photo_1')
            #->add('Photo_2')
            #->add('Photo_3')
            ->add('Id_category')
            ->add('Category', null, ['label' => 'Catégorie'])
            ->add('Product_state', null, ['label' => 'Etat'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Deal::class
        ]);
    }
}

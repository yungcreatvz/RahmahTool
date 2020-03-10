<?php

namespace App\Form;

use App\Entity\Salarie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SalarieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Prenom')
            ->add('nom')
            ->add('Poste')
            ->add('TypeDeContract')
            ->add('TelephonePortable')
            ->add('Email')
            ->add('AdresseDeResidence')
            ->add('Matricule')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Salarie::class,
        ]);
    }
}

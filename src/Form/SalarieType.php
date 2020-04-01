<?php

namespace App\Form;

use App\Entity\Salarie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SalarieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Matricule')
            ->add('Prenom')
            ->add('nom')
            ->add('Email')

            ->add('AdresseDeResidence')
            ->add('TelephonePortable',NumberType::class, [
                'required' => true
            ])
            ->add('TypeDeContract',ChoiceType::class,[
                'placeholder' => 'Selectionnez le Type',
                'choices' => [
                    'CDD' => 'CDD',
                    'CDI' => 'CDI',
                    'Prestataire' => 'Prestataire'
                ],
            ])
            ->add('Poste')


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Salarie::class,
        ]);
    }
}

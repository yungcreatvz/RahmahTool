<?php

namespace App\Form;

use App\Entity\AnneeAcademique;
use App\Entity\Classe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class ClasseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Classe')
            ->add('AnneeAcademique')
            ->add('AnneeAcademique', EntityType::class,[
                'class' => AnneeAcademique::class,
                'choice_label' => 'AnneeAcademique'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Classe::class,
        ]);
    }
}

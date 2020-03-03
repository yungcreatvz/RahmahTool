<?php

namespace App\Form;

use App\Entity\AbonnementServices;
use Doctrine\DBAL\Types\BooleanType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AbonnementServicesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Gouter')
            ->add('Cantine')
            ->add('Assurance')
            ->add('Taekwando')
            ->add('Kimono')
            ->add('ZoneDeTranport')
            ->add('TauxDeTransport')
            ->add('SurvetementEPS')
            ->add('TeeshirtEPS')
            ->add('Blouse')
            ->add('Bonnets')
            ->add('CoursDuSoir')
            ->add('PenaliteRetard')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AbonnementServices::class,
        ]);
    }
}

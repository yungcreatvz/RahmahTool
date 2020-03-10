<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    /**
     * Permet d'avoir la config des champs
     * @param string $label
     * @param string $placeholder
     * @return array
     */
    private function getConfiguration($label){
        return [
            'label' => $label
        ];
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('Prenom')
            ->add('Nom')
            ->add('hash',TextType::class,$this->getConfiguration('mot de passe'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}

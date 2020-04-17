<?php

namespace App\Form;

use App\Entity\Role;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    /**
     * Permet d'avoir la config des champs
     * @param string $label
     * @param string $placeholder
     * @return array
     */
    private function getConfiguration($label, $placeholder){
        return [
            'label' => $label,
            'attr'  => [
                'placeholder'=>$placeholder]
        ];
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Prenom',TextType::class,
                $this->getConfiguration("Prenom", "Prénom de l'utilisateur" ))
            ->add('Nom', TextType::class,
                $this->getConfiguration("Nom", "Nom de l'utilisateur"))
            ->add('email',EmailType::class,
                $this->getConfiguration("Email", "Adresse Email de l'utilisateur"))
            ->add('hash',PasswordType::class,
                $this->getConfiguration("Mot de Passe", "Definissez un Mot de Passe"))
            ->add('confirm_password',PasswordType::class,
                $this->getConfiguration("Mot de Passe", "Confirmez votre Mot de Passe"))
            ->add('Roles',EntityType::class,[
                'class' => Role::class,
                'choice_label' => 'titre',
                'multiple' => true,
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}

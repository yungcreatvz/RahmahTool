<?php

namespace App\Form;

use App\Entity\Parents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParentsType extends AbstractType
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
            ->add('CodeFamille', NumberType::class,
                $this->getConfiguration("Code de Famille","Entrez le code de famille"))
            ->add('PrenomParent', TextType::class,
                $this->getConfiguration("Prénoms Du Parent","Entrez le Prénoms Du Parent"))
            ->add('NomParent', TextType::class,
                $this->getConfiguration("Noms Du Parent","Entrez le Noms Du Parent"))
            ->add('SecteurDactivite', TextType::class,
                $this->getConfiguration("Secteur d'Activité Du Parent","Entrez le Secteur d'Activité Du Parent"))
            ->add('Profession' , TextType::class,
                $this->getConfiguration("Profession Du Parent","Entrez la Profession Du Parent"))
            ->add('TelephonePortable1',NumberType::class,
                $this->getConfiguration("Numéro de Telephone 1 Du Parent","(+221)"))
            ->add('TelephonePortable2',NumberType::class,
                $this->getConfiguration("Numéro de Telephone 2 Du Parent","(+221)"))
            ->add('TelephoneBureau',NumberType::class,
                $this->getConfiguration("Telephone de Bureau  Du Parent","(+221)"))
            ->add('TelephoneFixeMaison',NumberType::class,
                $this->getConfiguration("Telephone Fixe maison","(221)"))
            ->add('Email', TextType::class,
                $this->getConfiguration("Adresse Email Du Parent","Entrez l'Adresse Email Du Parent"))
            ->add('Adresse', TextType::class)
            ->add('Profession' , TextType::class,
                $this->getConfiguration("Profession Du Parent","Entrez la Profession Du Parent"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Parents::class,
        ]);
    }
}

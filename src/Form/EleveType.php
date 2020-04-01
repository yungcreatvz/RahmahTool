<?php

namespace App\Form;

use App\Entity\Classe;
use App\Entity\Eleve;
use App\Entity\Option;
use App\Entity\Parents;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EleveType extends AbstractType
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

            ->add('Matricule',NumberType::class,
                $this->getConfiguration("Matricule","Entrez la Matricule de l'élève"))
            ->add('Prenoms' , TextType::class,
                $this->getConfiguration("Prénoms de l'élève","Entrez le Prénoms de l'élève"))
            ->add('Nom',TextType::class,
                $this->getConfiguration("Nom de l'élève","Entrez le Nom de l'élève"))
            ->add('CodeFamille',NumberType::class,
                $this->getConfiguration("CodeFamille",  "Entrez le Code Famille de l'élève"))
            ->add('PaysDeNaissance',TextType::class,
                $this->getConfiguration("Pays de Naissance de l'élève","Entrez le Pays de Naissance  de l'élève"))
            ->add('LieuDeNaissance', TextType::class,
                $this->getConfiguration("Lieu de Naissance de l'élève","Entrez le Pays de Naissance  de l'élève"))
            ->add('DateDeNaissance', BirthdayType::class , [
                    'placeholder' => [
                        'day' => 'Jour', 'month' => 'Mois' , 'year' => 'Année' , ],
                'format' => 'dd-MM-yyyy',
            ])
            ->add('Sexe', ChoiceType::class,[
                'placeholder' => 'Definir le sexe',
                'choices' => [
                    'Garçon' => 'Garçon',
                    'Fille' => 'Fille',
                ],
            ])
            ->add('AdresseDeResidence', TextType::class,
                $this->getConfiguration("Adresse de résidence ","Entrez l'adresse de residence de l'élève"))
            ->add('TelephoneDomicile' , NumberType::class,
                $this->getConfiguration("Numéro du domicile ","(+221)"))
            ->add('TelephoneEleve' ,NumberType::class,
                $this->getConfiguration("Numéro de Telephone de l'élève","(+221)"))
            ->add('AnneeDarrivee',BirthdayType::class , [
                'placeholder' => [
                    'day' => 'Jour', 'month' => 'Mois' , 'year' => 'Année' , ],
                'format' => 'dd-MM-yyyy',
            ])
            ->add('PetitFrereOuSoeur', TextType::class,
                $this->getConfiguration("Nom & prenom","Petit Frère ou Soeur"))
            ->add('FrereOuSoeur', TextType::class,
                $this->getConfiguration("Prénoms & nom","Frère ou Soeur de l'élève"))
            ->add('PreferenceManuel', ChoiceType::class,[
        'choices' => [
            'Gauche' => 'Gauche',
            'Droite' => 'Droite',
            'Aucune' => 'Aucune'
               ],
            ])
            ->add ('TolerenceParacetamol', ChoiceType::class,[
                'choices' => [
                    'Oui' => 'Oui',
                    'Non' => 'Non'
                ],
            ])
            ->add('MaladieSignale')
            ->add('Classe', EntityType::class,[
                'class' => Classe::class,
                'choice_label'=> 'classe',
            ])

            ->add('Options', EntityType::class,[
               'class' => Option::class,
                'choice_label'=> 'Options',
                'label' => 'Choisissez des options pour de l\'eleve',
                'multiple' => true,
                'expanded' => true
            ])

            ->add('Parent', CollectionType::class, [
                'entry_type' => ParentsType::class,
                'entry_options'=> [
                    'label' => false],
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Eleve::class,
        ]);
    }
}

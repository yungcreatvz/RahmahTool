<?php

namespace App\DataFixtures;

use App\Entity\Eleve;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr-FR');
        $Eleve =new Eleve();

        for ($i = 1; $i <= 30; $i++) {

            $Matricule = $faker->randomDigit ;
            $Prenom = $faker->name;
            $Nom = $faker->sentence(1);
            $DateDeNaissance = $faker-> date($format = 'd-m-Y', $max = 'now');
            $LieuDeNaissance= $faker-> streetName;
            $Sexe = $faker->title($gender = null|'male'|'female');
            $AdresseDeResidence = $faker->address ;
            $TelephoneDomicile = $faker->phoneNumber;
            $TelephoneEleve = $faker-> phoneNumber;
            $AnneeDarrivee= $faker->year($max = 'now')  ;
            $ParentResident= $faker->name;
            $AutreParentResident= $faker->name;
            $PetitFrereOuSoeur= $faker->name;
            $FrereOuSoeur= $faker->name;
            $PreferenceManuel= $faker-> array('gauche', 'droite', 'aucune');
            $TolerenceParacetamol= $faker-> array('Oui', 'Non');
            $MaladieSignale= $faker-> word;

            $Eleve->setMatricule($Matricule)
             ->setPrenoms($Prenom)
             ->setNom($Nom)
             ->setDateDeNaissance($DateDeNaissance)
            ->setLieuDeNaissance($LieuDeNaissance)
            ->setSexe($Sexe)
            ->setAdresseDeResidence($AdresseDeResidence)
            ->setTelephoneDomicile($TelephoneDomicile)
            ->setTelephoneEleve($TelephoneEleve)
            ->setAnneeDarrivee($AnneeDarrivee)
            ->setParentResident($ParentResident)
            ->setAutreParentResident($AutreParentResident)
            ->setPetitFrereOuSoeur($PetitFrereOuSoeur)
            ->setFrereOuSoeur($FrereOuSoeur)
            ->setPreferenceManuel($PreferenceManuel)
            ->setTolerenceParacetamol($TolerenceParacetamol)
            ->setMaladieSignale($MaladieSignale);

            $manager->persist($Eleve);

             $manager->flush();
        }





    }
}


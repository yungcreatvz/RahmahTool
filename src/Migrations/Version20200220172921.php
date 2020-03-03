<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200220172921 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE annee_academique (id INT AUTO_INCREMENT NOT NULL, n INT NOT NULL, annee_academique DATE NOT NULL, matricule INT NOT NULL, classe LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classe (id INT AUTO_INCREMENT NOT NULL, cm2 LONGTEXT NOT NULL, hifz1 LONGTEXT NOT NULL, hifz2 LONGTEXT NOT NULL, hifz3 LONGTEXT NOT NULL, hifz4 LONGTEXT NOT NULL, hifz5 LONGTEXT NOT NULL, moyenne_section LONGTEXT NOT NULL, petite_section LONGTEXT NOT NULL, toute_petite_section LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cm2 (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE eleve (id INT AUTO_INCREMENT NOT NULL, matricule LONGTEXT NOT NULL, prenoms LONGTEXT NOT NULL, nom LONGTEXT NOT NULL, pays_de_naissance LONGTEXT NOT NULL, lieu_de_naissance LONGTEXT NOT NULL, date_de_naissance DATE NOT NULL, sexe LONGTEXT NOT NULL, adresse_de_residence LONGTEXT NOT NULL, telephone_domicile INT NOT NULL, telephone_eleve INT DEFAULT NULL, annee_darrivee DATE NOT NULL, parent_resident LONGTEXT NOT NULL, autre_parent_resident LONGTEXT DEFAULT NULL, petit_frere_ou_soeur LONGTEXT DEFAULT NULL, frere_ou_soeur LONGTEXT DEFAULT NULL, preference_manuel LONGTEXT NOT NULL, tolerence_paracetamol LONGTEXT NOT NULL, maladie_signale LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, numero_facture INT NOT NULL, date DATE NOT NULL, mois DATE NOT NULL, code_famille INT NOT NULL, matricule_eleve INT NOT NULL, prenoms LONGTEXT NOT NULL, nom LONGTEXT NOT NULL, classe LONGTEXT NOT NULL, methode LONGTEXT NOT NULL, montant INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE paiement (id INT AUTO_INCREMENT NOT NULL, code_famille INT NOT NULL, matricule INT NOT NULL, numero_de_recu INT NOT NULL, date DATE NOT NULL, mois DATE NOT NULL, prenoms LONGTEXT NOT NULL, nom LONGTEXT NOT NULL, classe LONGTEXT NOT NULL, numero_facture INT NOT NULL, methode LONGTEXT NOT NULL, montant INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parents (id INT AUTO_INCREMENT NOT NULL, code_famille INT NOT NULL, prenom_parent LONGTEXT NOT NULL, nom_parent LONGTEXT NOT NULL, secteur_dactivite LONGTEXT NOT NULL, profession LONGTEXT NOT NULL, telephone_portable1 INT NOT NULL, telephone_portable2 INT DEFAULT NULL, telephone_bureau INT DEFAULT NULL, telephone_fixe_maison INT NOT NULL, email LONGTEXT NOT NULL, adresse LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, prenom LONGTEXT NOT NULL, nom LONGTEXT NOT NULL, email LONGTEXT NOT NULL, mot_de_passe LONGTEXT NOT NULL, role INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE annee_academique');
        $this->addSql('DROP TABLE classe');
        $this->addSql('DROP TABLE cm2');
        $this->addSql('DROP TABLE eleve');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE paiement');
        $this->addSql('DROP TABLE parents');
        $this->addSql('DROP TABLE user');
    }
}

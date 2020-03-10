<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200303133137 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE salarie (id INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, poste VARCHAR(255) NOT NULL, type_de_contract VARCHAR(255) NOT NULL, telephone_portable VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, adresse_de_residence VARCHAR(255) NOT NULL, matricule VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonnement_services CHANGE zone_de_tranport zone_de_tranport LONGTEXT NOT NULL, CHANGE survetement_eps survetement_eps TINYINT(1) NOT NULL, CHANGE teeshirt_eps teeshirt_eps TINYINT(1) NOT NULL, CHANGE blouse blouse TINYINT(1) NOT NULL, CHANGE bonnets bonnets TINYINT(1) NOT NULL, CHANGE cours_du_soir cours_du_soir TINYINT(1) NOT NULL, CHANGE penalite_retard penalite_retard TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE salarie');
        $this->addSql('ALTER TABLE abonnement_services CHANGE zone_de_tranport zone_de_tranport LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE survetement_eps survetement_eps LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE teeshirt_eps teeshirt_eps LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE blouse blouse LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE bonnets bonnets LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE cours_du_soir cours_du_soir LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE penalite_retard penalite_retard LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\'');
    }
}

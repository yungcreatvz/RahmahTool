<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200302110101 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE abonnement_services (id INT AUTO_INCREMENT NOT NULL, gouter LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', cantine TINYINT(1) NOT NULL, assurance TINYINT(1) NOT NULL, kimono TINYINT(1) NOT NULL, zone_de_tranport LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', taux_de_transport INT NOT NULL, survetement_eps LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', teeshirt_eps LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', blouse LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', bonnets LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', cours_du_soir LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', penalite_retard LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE abonnement_services');
    }
}

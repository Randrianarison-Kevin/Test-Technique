<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240321111119 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, compte_affaire VARCHAR(255) DEFAULT NULL, compte_evenement VARCHAR(255) DEFAULT NULL, compte_dernier_evenement VARCHAR(255) DEFAULT NULL, numero_fiche INT DEFAULT NULL, libelle_civilite VARCHAR(20) DEFAULT NULL, proprietaire_actuel_du_vehicule VARCHAR(255) DEFAULT NULL, nom VARCHAR(100) DEFAULT NULL, prenom VARCHAR(100) DEFAULT NULL, numero_et_nom_de_la_voie VARCHAR(255) DEFAULT NULL, complement_adresse1 VARCHAR(100) DEFAULT NULL, code_postal INT DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, telephone_domicile INT DEFAULT NULL, telephone_portable INT DEFAULT NULL, telephone_job INT DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, date_de_mise_en_circulation DATE DEFAULT NULL, date_achat DATE DEFAULT NULL, date_dernier_evenement DATE DEFAULT NULL, libelle_marque VARCHAR(100) DEFAULT NULL, libelle_modele VARCHAR(100) DEFAULT NULL, version VARCHAR(255) DEFAULT NULL, vin VARCHAR(255) DEFAULT NULL, immatriculation VARCHAR(255) DEFAULT NULL, type_de_prospect VARCHAR(255) DEFAULT NULL, kilometrage INT DEFAULT NULL, libelle_energie VARCHAR(255) DEFAULT NULL, vendeur_vn VARCHAR(100) DEFAULT NULL, vendeur_vo VARCHAR(100) DEFAULT NULL, commentaire_de_facturation VARCHAR(255) DEFAULT NULL, type_vnvo VARCHAR(50) DEFAULT NULL, numero_de_dossier_vnvo VARCHAR(255) DEFAULT NULL, intermediaire_de_vente_vn VARCHAR(255) DEFAULT NULL, date_evenement DATE DEFAULT NULL, origine_evenement VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE test_technique');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE test_technique (id INT AUTO_INCREMENT NOT NULL, compte_affaire VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, compte_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, compte_dernier_evenement VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, numero_fiche INT DEFAULT NULL, libelle_civilite VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, proprietaire_actuel_du_vehicule VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, nom VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, prenom VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, numero_et_nom_de_la_voie VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, complement_adresse1 VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, code_postal INT DEFAULT NULL, ville VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, telephone_domicile INT DEFAULT NULL, telephone_portable INT DEFAULT NULL, telephone_job INT DEFAULT NULL, email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_de_mise_en_circulation DATE DEFAULT NULL, date_achat DATE DEFAULT NULL, date_dernier_evenement DATE DEFAULT NULL, libelle_marque VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, libelle_modele VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, version VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, vin VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, immatriculation VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, type_de_prospect VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, kilometrage INT DEFAULT NULL, libelle_energie VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, vendeur_vn VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, vendeur_vo VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, commentaire_de_facturation VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, type_vnvo VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, numero_de_dossier_vnvo VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, intermediaire_de_vente_vn VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, date_evenement DATE DEFAULT NULL, origine_evenement VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE test');
    }
}

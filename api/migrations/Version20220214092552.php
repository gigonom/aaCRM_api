<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220214092552 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE client_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE client (id INT NOT NULL, reg_number INT DEFAULT NULL, full_name VARCHAR(255) NOT NULL, short_name VARCHAR(255) NOT NULL, brand_name VARCHAR(255) NOT NULL, region INT NOT NULL, bus_address VARCHAR(255) DEFAULT NULL, post_address VARCHAR(255) DEFAULT NULL, site VARCHAR(255) DEFAULT NULL, inn VARCHAR(255) DEFAULT NULL, ogrn INT DEFAULT NULL, kpp INT DEFAULT NULL, bic INT DEFAULT NULL, bank_name VARCHAR(255) DEFAULT NULL, corr_acc INT DEFAULT NULL, acc INT DEFAULT NULL, status INT NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE client_id_seq CASCADE');
        $this->addSql('DROP TABLE client');
    }
}

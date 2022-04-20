<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220222185325 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ALTER full_name DROP NOT NULL');
        $this->addSql('ALTER TABLE client ALTER short_name DROP NOT NULL');
        $this->addSql('ALTER TABLE client ALTER brand_name DROP NOT NULL');
        $this->addSql('ALTER TABLE client ALTER region DROP NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE client ALTER full_name SET NOT NULL');
        $this->addSql('ALTER TABLE client ALTER short_name SET NOT NULL');
        $this->addSql('ALTER TABLE client ALTER brand_name SET NOT NULL');
        $this->addSql('ALTER TABLE client ALTER region SET NOT NULL');
    }
}

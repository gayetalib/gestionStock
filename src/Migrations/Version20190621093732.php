<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190621093732 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE departement ADD Direction_id INT DEFAULT NULL, DROP nom_direction');
        $this->addSql('ALTER TABLE departement ADD CONSTRAINT FK_C1765B63B742026F FOREIGN KEY (Direction_id) REFERENCES direction (id)');
        $this->addSql('CREATE INDEX IDX_C1765B63B742026F ON departement (Direction_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE departement DROP FOREIGN KEY FK_C1765B63B742026F');
        $this->addSql('DROP INDEX IDX_C1765B63B742026F ON departement');
        $this->addSql('ALTER TABLE departement ADD nom_direction VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP Direction_id');
    }
}

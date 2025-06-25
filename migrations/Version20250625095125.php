<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250625095125 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE user ADD first_name VARCHAR(50) NOT NULL, ADD last_name VARCHAR(50) NOT NULL, ADD date_of_birth DATETIME NOT NULL, ADD profile_picture_url VARCHAR(255) NOT NULL, ADD bio LONGTEXT DEFAULT NULL, ADD phone_number VARCHAR(20) DEFAULT NULL, ADD address VARCHAR(100) DEFAULT NULL, ADD postal_code VARCHAR(10) DEFAULT NULL, ADD city VARCHAR(150) DEFAULT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE `user` DROP first_name, DROP last_name, DROP date_of_birth, DROP profile_picture_url, DROP bio, DROP phone_number, DROP address, DROP postal_code, DROP city
        SQL);
    }
}

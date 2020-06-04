<?php

declare(strict_types=1);

namespace App\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version1Brand extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $sql = 'CREATE TABLE brand (
            id int unsigned auto_increment not null,
            name varchar(255) not null,
            description text,
            primary key (id)
)';
        $this->addSql($sql);
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE brand');
    }
}

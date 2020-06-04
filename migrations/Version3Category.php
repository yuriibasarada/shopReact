<?php

declare(strict_types=1);

namespace App\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version3Category extends AbstractMigration
{

    public function up(Schema $schema) : void
    {
        $sql = 'CREATE TABLE category (
            id int unsigned auto_increment not null,
            name varchar(255) not null,
            description text,
            img varchar(255),
                        primary key (id)

)';
        $this->addSql($sql);
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP TABLE category');
    }
}

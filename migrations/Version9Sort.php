<?php

declare(strict_types=1);

namespace App\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version9Sort extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $sql = "CREATE TABLE sort (
                id int UNSIGNED auto_increment not null,
                name VARCHAR(255) not null,
                order_by VARCHAR(255) not null,
                type ENUM('desc', 'asc') default 'asc',
                description TEXT,
                
                primary key (id)
              )";

        $this->addSql($sql);
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE sort');
    }
}

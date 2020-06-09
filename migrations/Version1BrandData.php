<?php

declare(strict_types=1);

namespace App\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version1BrandData extends AbstractMigration
{

    public function up(Schema $schema) : void
    {
        $sql = "INSERT INTO brand 
                (id, name, description) VALUES 
                (1, 'Toshiba', 'kifes is good for wifes'),
                (2, 'Sekiro', 'kifes is good for wifes'),
                (3, 'Honda', 'kifes is good for hunday'),
                (4, 'SS DIR', 'kifes is good for wifes'),
                (5, 'SHW', 'kifes is good for wifes')
                    ";
        $this->addSql($sql);
    }

    public function down(Schema $schema) : void {}
}

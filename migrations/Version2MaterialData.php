<?php

declare(strict_types=1);

namespace App\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version2MaterialData extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $sql = "INSERT INTO material 
                (id, name, description) VALUES 
                (1, 'Iron', 'kifes is good for wifes'),
                (2, 'Carbon', 'kifes is good for wifes'),
                (3, 'T34', 'kifes is good for hunday'),
                (4, 'WW39', 'kifes is good for wifes'),
                (5, 'ULTI SPOCK', 'kifes is good for wifes')
                    ";
        $this->addSql($sql);
    }

    public function down(Schema $schema) : void {}
}

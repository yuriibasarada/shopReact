<?php

declare(strict_types=1);

namespace App\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version9993Category extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $sql = "INSERT INTO category 
                (id, name, description, img) VALUES 
                (1, 'Multi', 'kifes is good for wifes', 'category/multi.svg'),
                (2, 'Machete', 'kifes is good for wifes', 'category/machete.svg'),
                (3, 'Flip', 'kifes is good for wifes', 'category/flip.svg'),
                (4, 'Kitchen', 'kifes is good for wifes', 'category/kitchen.svg'),
                (5, 'Other', 'kifes is good for wifes', 'category/more.svg')
                    ";
        $this->addSql($sql);
    }

    public function down(Schema $schema) : void {}
}

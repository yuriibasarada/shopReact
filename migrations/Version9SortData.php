<?php

declare(strict_types=1);

namespace App\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


final class Version9SortData extends AbstractMigration
{

    public function up(Schema $schema) : void
    {
        $sql = "INSERT INTO sort (id, name, order_by, type, description) VALUES 
                    (1, 'Sort by price up', 'price', 'asc', 'default description'),
                    (2, 'Sort by price down', 'price', 'desc', 'default description'),
                    (3, 'Top sales', 'sold_time', 'desc', 'default description')
                    ";
        $this->addSql($sql);
    }

    public function down(Schema $schema) : void {}
}

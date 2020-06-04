<?php

declare(strict_types=1);

namespace App\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;


final class Version4Product extends AbstractMigration
{

    public function up(Schema $schema): void
    {
        $sql = "CREATE TABLE product(
                id int UNSIGNED auto_increment not null,
                name VARCHAR(255) not null ,
                price float not null,
                description varchar(255),
                weight float,
                `long` float,
                sold_time int,
                material_id int unsigned not null,
                brand_id int unsigned not null,
                category_id int unsigned not null, 
                
                primary key (id),
                
                FOREIGN KEY (brand_id) REFERENCES brand(id),
                FOREIGN KEY (material_id) REFERENCES material(id),
                FOREIGN KEY (category_id) REFERENCES category(id)

                     
                     )";
        $this->addSql($sql);
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE products');
    }
}

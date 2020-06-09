<?php

declare(strict_types=1);

namespace App\migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version4ProductData extends AbstractMigration
{

    public function up(Schema $schema) : void
    {
        $sql = "INSERT INTO product
        (id, name, price, description, weight, `long`, sold_time, material_id, brand_id, category_id) VALUES
        (1, 'Tes', 1, 'description for knife', 100.4, 50.2, 1, 1, 1, 1),
        (2, 'Fs', 2, 'description for knife', 99.4, 45.2, 2, 2, 2, 2),
        (3, 'Gsf', 3, 'description for knife', 98.4, 25.2, 2, 2, 2, 2),
        (4, 'Fer', 4, 'description for knife', 97.4, 64.2, 2, 2, 2, 2),
        (5, 'Rer', 5, 'description for knife', 96.4, 25.2, 3, 3, 3, 3),
        (6, 'Gop', 6, 'description for knife', 95.4, 278.2, 3, 3, 3, 3),
        (7, 'Jop', 7, 'description for knife', 94.4, 78.2, 3, 3, 3, 3),
        (8, 'Jip', 8, 'description for knife', 93.4, 76.2, 3, 3, 3, 3),
        (9, 'Tip', 9, 'description for knife', 92.4, 777.2, 4, 4, 4, 4),
        (10, 'Crip', 10, 'description for knife', 91.4, 452.2, 4, 4, 4, 4),
        (11, 'Chip', 11, 'description for knife', 90.4, 25.2, 5, 5, 5, 5),
        (12, 'Hello', 12, 'description for knife', 89.4, 27.2, 5, 5, 5, 5),
        (13, 'Test', 13, 'description for knife', 88.4, 2.55, 2, 2, 2, 2),
        (14, 'Gog', 14, 'description for knife', 87.4, 457.2, 1, 1, 1, 1),
        (15, 'Step', 15, 'description for knife', 86.4, 47.2, 1, 1, 1, 1),
        (16, 'Strop', 16, 'description for knife', 85.4, 45.2, 1, 1, 1, 1),
        (17, 'Site', 17, 'description for knife', 84.4, 455.2, 2, 3, 3, 3),
        (18, 'Juc', 18, 'description for knife', 83.4, 555.2, 6, 3, 4, 5),
        (19, 'Jona', 19, 'description for knife', 82.4, 789.2, 3, 4, 2, 3),
        (20, 'Knife', 20, 'description for knife', 81.4, 789.2, 4, 3, 4, 5),
        (21, 'Hik', 21, 'description for knife', 80.4, 245.2, 1, 5, 3, 4),
        (22, 'Random', 22, 'description for knife', 79.4, 555.2, 34, 3, 4, 5),
        (23, 'Test', 23, 'description for knife', 78.4, 557.2, 5, 5, 5, 5),
        (24, 'Ololo', 24, 'description for knife', 77.4, 778.2, 3, 3, 3, 3),
        (25, 'Trollface', 25, 'description for knife', 99.4, 3213.2, 1, 1, 1, 1),
        (26, 'Oh my', 26, 'description for knife', 75.4, 452.2, 8, 5, 5, 5),
        (27, 'Fork', 27, 'description for knife', 74.4, 255.2, 6, 1, 1, 1),
        (28, 'Jojo', 28, 'description for knife', 73.4, 455.2, 7, 1, 1, 1)
        ";
        $this->addSql($sql);
    }

    public function down(Schema $schema) : void {}
}

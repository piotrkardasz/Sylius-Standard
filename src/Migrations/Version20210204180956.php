<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210204180956 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add color property to Product entity';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE sylius_product ADD color VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE sylius_product DROP color');
    }
}

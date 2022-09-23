<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220923140518 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE player ADD resistance_aux_blessures INT NOT NULL, ADD pourc_max_domicile INT NOT NULL, ADD case_dom_max INT NOT NULL, ADD valeur INT NOT NULL, ADD valeur_revente INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE player DROP resistance_aux_blessures, DROP pourc_max_domicile, DROP case_dom_max, DROP valeur, DROP valeur_revente');
    }
}

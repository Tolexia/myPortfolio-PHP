<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210203131628 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, category VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, from_date DATE NOT NULL, to_date DATE NOT NULL, INDEX IDX_2FB3D0EE12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_used_technology (project_id INT NOT NULL, used_technology_id INT NOT NULL, INDEX IDX_8810A94D166D1F9C (project_id), INDEX IDX_8810A94DCA23328E (used_technology_id), PRIMARY KEY(project_id, used_technology_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE used_technology (id INT AUTO_INCREMENT NOT NULL, technology VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE project_used_technology ADD CONSTRAINT FK_8810A94D166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_used_technology ADD CONSTRAINT FK_8810A94DCA23328E FOREIGN KEY (used_technology_id) REFERENCES used_technology (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE12469DE2');
        $this->addSql('ALTER TABLE project_used_technology DROP FOREIGN KEY FK_8810A94D166D1F9C');
        $this->addSql('ALTER TABLE project_used_technology DROP FOREIGN KEY FK_8810A94DCA23328E');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_used_technology');
        $this->addSql('DROP TABLE used_technology');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221024134333 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, date_creation DATETIME NOT NULL, deal_id INT NOT NULL, user_id INT NOT NULL, parent_id INT DEFAULT NULL, content LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE deal (id INT AUTO_INCREMENT NOT NULL, price INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, product_state_id INT NOT NULL, photo VARCHAR(255) NOT NULL, date_creation DATETIME NOT NULL, date_publication DATETIME DEFAULT NULL, date_update DATETIME DEFAULT NULL, id_category INT NOT NULL, seller VARCHAR(255) NOT NULL, buyer VARCHAR(255) DEFAULT NULL, is_sold TINYINT(1) NOT NULL, is_published TINYINT(1) NOT NULL, date_purchase DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE state (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, pseudo VARCHAR(30) NOT NULL, email VARCHAR(255) NOT NULL, nb_user_likes INT DEFAULT NULL, nb_user_dislikes INT DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, id_user_rights LONGTEXT DEFAULT NULL, bought_other_users_pseudo LONGTEXT DEFAULT NULL, bought_other_users_id LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE deal');
        $this->addSql('DROP TABLE state');
        $this->addSql('DROP TABLE user');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221026152037 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, deal_id INT DEFAULT NULL, user_id INT NOT NULL, parent_id INT DEFAULT NULL, date_creation DATETIME NOT NULL, content LONGTEXT NOT NULL, INDEX IDX_9474526CF60E2305 (deal_id), INDEX IDX_9474526CA76ED395 (user_id), INDEX IDX_9474526C727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE deal (id INT AUTO_INCREMENT NOT NULL, seller_id INT NOT NULL, buyer_id INT DEFAULT NULL, category_id INT NOT NULL, product_state_id INT NOT NULL, price INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, date_creation DATETIME NOT NULL, date_publication DATETIME DEFAULT NULL, date_update DATETIME DEFAULT NULL, is_sold TINYINT(1) NOT NULL, is_published TINYINT(1) NOT NULL, date_purchase DATETIME DEFAULT NULL, main_photo LONGTEXT DEFAULT NULL, photo_2 LONGTEXT DEFAULT NULL, photo_3 LONGTEXT DEFAULT NULL, INDEX IDX_E3FEC1168DE820D9 (seller_id), INDEX IDX_E3FEC1166C755722 (buyer_id), INDEX IDX_E3FEC11612469DE2 (category_id), INDEX IDX_E3FEC116CE685656 (product_state_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE state (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, pseudo VARCHAR(30) NOT NULL, email VARCHAR(255) NOT NULL, nb_user_likes INT DEFAULT NULL, nb_user_dislikes INT DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', sold_to VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CF60E2305 FOREIGN KEY (deal_id) REFERENCES deal (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C727ACA70 FOREIGN KEY (parent_id) REFERENCES comment (id)');
        $this->addSql('ALTER TABLE deal ADD CONSTRAINT FK_E3FEC1168DE820D9 FOREIGN KEY (seller_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE deal ADD CONSTRAINT FK_E3FEC1166C755722 FOREIGN KEY (buyer_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE deal ADD CONSTRAINT FK_E3FEC11612469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE deal ADD CONSTRAINT FK_E3FEC116CE685656 FOREIGN KEY (product_state_id) REFERENCES state (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CF60E2305');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CA76ED395');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C727ACA70');
        $this->addSql('ALTER TABLE deal DROP FOREIGN KEY FK_E3FEC1168DE820D9');
        $this->addSql('ALTER TABLE deal DROP FOREIGN KEY FK_E3FEC1166C755722');
        $this->addSql('ALTER TABLE deal DROP FOREIGN KEY FK_E3FEC11612469DE2');
        $this->addSql('ALTER TABLE deal DROP FOREIGN KEY FK_E3FEC116CE685656');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE deal');
        $this->addSql('DROP TABLE state');
        $this->addSql('DROP TABLE user');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221025103014 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment CHANGE deal_id deal_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CF60E2305 FOREIGN KEY (deal_id) REFERENCES deal (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_9474526CF60E2305 ON comment (deal_id)');
        $this->addSql('CREATE INDEX IDX_9474526CA76ED395 ON comment (user_id)');
        $this->addSql('ALTER TABLE deal ADD buyer_id INT DEFAULT NULL, ADD category_id INT NOT NULL, DROP seller, DROP buyer, CHANGE id_category seller_id INT NOT NULL');
        $this->addSql('ALTER TABLE deal ADD CONSTRAINT FK_E3FEC1168DE820D9 FOREIGN KEY (seller_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE deal ADD CONSTRAINT FK_E3FEC1166C755722 FOREIGN KEY (buyer_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE deal ADD CONSTRAINT FK_E3FEC11612469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE deal ADD CONSTRAINT FK_E3FEC116CE685656 FOREIGN KEY (product_state_id) REFERENCES state (id)');
        $this->addSql('CREATE INDEX IDX_E3FEC1168DE820D9 ON deal (seller_id)');
        $this->addSql('CREATE INDEX IDX_E3FEC1166C755722 ON deal (buyer_id)');
        $this->addSql('CREATE INDEX IDX_E3FEC11612469DE2 ON deal (category_id)');
        $this->addSql('CREATE INDEX IDX_E3FEC116CE685656 ON deal (product_state_id)');
        $this->addSql('ALTER TABLE user ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', DROP id_user_rights');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CF60E2305');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CA76ED395');
        $this->addSql('DROP INDEX IDX_9474526CF60E2305 ON comment');
        $this->addSql('DROP INDEX IDX_9474526CA76ED395 ON comment');
        $this->addSql('ALTER TABLE comment CHANGE deal_id deal_id INT NOT NULL');
        $this->addSql('ALTER TABLE deal DROP FOREIGN KEY FK_E3FEC1168DE820D9');
        $this->addSql('ALTER TABLE deal DROP FOREIGN KEY FK_E3FEC1166C755722');
        $this->addSql('ALTER TABLE deal DROP FOREIGN KEY FK_E3FEC11612469DE2');
        $this->addSql('ALTER TABLE deal DROP FOREIGN KEY FK_E3FEC116CE685656');
        $this->addSql('DROP INDEX IDX_E3FEC1168DE820D9 ON deal');
        $this->addSql('DROP INDEX IDX_E3FEC1166C755722 ON deal');
        $this->addSql('DROP INDEX IDX_E3FEC11612469DE2 ON deal');
        $this->addSql('DROP INDEX IDX_E3FEC116CE685656 ON deal');
        $this->addSql('ALTER TABLE deal ADD id_category INT NOT NULL, ADD seller VARCHAR(255) NOT NULL, ADD buyer VARCHAR(255) DEFAULT NULL, DROP seller_id, DROP buyer_id, DROP category_id');
        $this->addSql('ALTER TABLE user ADD id_user_rights LONGTEXT DEFAULT NULL, DROP roles');
    }
}

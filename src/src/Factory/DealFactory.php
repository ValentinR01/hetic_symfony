<?php

namespace App\Factory;

use App\Entity\Deal;
use App\Repository\DealRepository;
use App\Factory\UserFactory;
use http\Client\Curl\User;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Deal>
 *
 * @method static Deal|Proxy createOne(array $attributes = [])
 * @method static Deal[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Deal[]|Proxy[] createSequence(array|callable $sequence)
 * @method static Deal|Proxy find(object|array|mixed $criteria)
 * @method static Deal|Proxy findOrCreate(array $attributes)
 * @method static Deal|Proxy first(string $sortedField = 'id')
 * @method static Deal|Proxy last(string $sortedField = 'id')
 * @method static Deal|Proxy random(array $attributes = [])
 * @method static Deal|Proxy randomOrCreate(array $attributes = [])
 * @method static Deal[]|Proxy[] all()
 * @method static Deal[]|Proxy[] findBy(array $attributes)
 * @method static Deal[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Deal[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static DealRepository|RepositoryProxy repository()
 * @method Deal|Proxy create(array|callable $attributes = [])
 */
final class DealFactory extends ModelFactory
{    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    public function isSold(): self
    {
        return $this->addState([
            'Buyer' => UserFactory::random(),
            'Date_purchase' => self::faker()->dateTimeBetween('- 100 days', '-1 second'),
            'Is_sold' => true,
        ]);
    }

    protected function getDefaults(): array
    {

        $listImages = [
            'https://raitohetic.s3.eu-west-3.amazonaws.com/assiettes_fleurs.png',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/assiettes.webp',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/couverts.webp',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/fauteuil-table-rotin.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/fauteuil-vintage.webp',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/flutes.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/lampes_chevet.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/malle.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/mini-tourne-disque-vintage-scaled.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/miroir.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/moulin_poivre.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/paniers.png',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/suspension-luminaire.webp',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/tabouret.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/vase.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/velo.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/verres.jpeg'
        ];

        $Creation_and_publication_date = self::faker()->dateTimeBetween('- 100 days', '-1 second');
        return [
            'Price' => self::faker()->numberBetween(1, 200),
            'Title' => self::faker()->realText(40),
            'Description' => self::faker()->paragraphs(rand(1,4), true),
            'MainPhoto' => $listImages[rand(0, count($listImages) - 1)],
            'Photo2' => $listImages[rand(0, count($listImages) - 1)],
            'Photo3' => $listImages[rand(0, count($listImages) - 1)],
            'Date_creation' => $Creation_and_publication_date,
            'Is_sold' => false,
            'Is_published' => true,
            'Seller' => UserFactory::random(),
            'Buyer' => null,
            'Date_purchase' => null,
            '$Date_publication' => $Creation_and_publication_date,
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Deal $deal): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Deal::class;
    }
}

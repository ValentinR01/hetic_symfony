<?php

namespace App\Factory;

use App\Entity\User;
use App\Repository\UserRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<User>
 *
 * @method static User|Proxy createOne(array $attributes = [])
 * @method static User[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static User[]|Proxy[] createSequence(array|callable $sequence)
 * @method static User|Proxy find(object|array|mixed $criteria)
 * @method static User|Proxy findOrCreate(array $attributes)
 * @method static User|Proxy first(string $sortedField = 'id')
 * @method static User|Proxy last(string $sortedField = 'id')
 * @method static User|Proxy random(array $attributes = [])
 * @method static User|Proxy randomOrCreate(array $attributes = [])
 * @method static User[]|Proxy[] all()
 * @method static User[]|Proxy[] findBy(array $attributes)
 * @method static User[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static User[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static UserRepository|RepositoryProxy repository()
 * @method User|Proxy create(array|callable $attributes = [])
 */
final class UserFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    public function isAdmin(): self
    {
        return $this->addState(['Roles' => ['ROLE_ADMIN']]);
    }

    protected function getDefaults(): array
    {
        $listImages = [
            'https://raitohetic.s3.eu-west-3.amazonaws.com/profil/a1.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/profil/a2.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/profil/a3.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/profil/f1.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/profil/f2.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/profil/h1.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/profil/h2.jpeg',
            'https://raitohetic.s3.eu-west-3.amazonaws.com/profil/h3.jpeg'
        ];

        return [
            'Pseudo' => self::faker()->firstName(),
            'Email' => self::faker()->email(),
            'Password' => password_hash('neverend', PASSWORD_BCRYPT, ['cost' => 13]) . PHP_EOL,
            'Roles' => ['ROLE_USER'],
            'Nb_user_likes' => self::faker()->randomDigit(),
            'Nb_user_dislikes' => self::faker()->randomDigit(),
            'Photo' => $listImages[rand(0, count($listImages) - 1)],
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(User $user): void {})
        ;
    }

    protected static function getClass(): string
    {
        return User::class;
    }
}

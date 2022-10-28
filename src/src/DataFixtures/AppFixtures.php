<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\UserFactory;
use App\Factory\DealFactory;
use App\Factory\CommentFactory;
use App\Entity\Category;
use App\Entity\State;

class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $listCategory = ['Meuble', 'Vaisselle', 'Lumière', 'Divers'];
        $categories = [];

        for ($i = 0; $i < count($listCategory); $i++) {
            $category = new Category();
            $category->setLabel($listCategory[$i]);
            $manager->persist($category);
            $categories[] = $category;
        }

        $listState = ['Comme neuf', 'Très bon état ', 'Bon état', 'Satisfaisant'];
        $states = [];

        for ($i = 0; $i < count($listState); $i++) {
            $state = new State();
            $state->setLabel($listState[$i]);
            $manager->persist($state);
            $states[] = $state;
        }

        $userPseudo = [];
        for ($i = 0; $i < 5; $i++) {
            $newUserPseudo = UserFactory::createOne()->getPseudo();
            $userPseudo[] = $newUserPseudo;
        }
        UserFactory::new()->soldTo($userPseudo)->many(25)->create();
        UserFactory::new()->isAdmin()->many(5)->create();

        DealFactory::createMany(20, function() use ($categories, $states) {
            return [
                'Category' => $categories[rand(0, count($categories) - 1)],
                'Product_state' => $states[rand(0, count($states) - 1)],
            ];
        });
        DealFactory::new()->isSold()->many(5)->create(function() use ($categories, $states) {
            return [
                'Category' => $categories[rand(0, count($categories) - 1)],
                'Product_state' => $states[rand(0, count($states) - 1)],
            ];
        });

        CommentFactory::createMany(20);
        CommentFactory::new()->isChildren()->many(10)->create();

        $manager->flush();
    }
}

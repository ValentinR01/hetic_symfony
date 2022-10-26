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
        $listCategory = ['Meuble', 'Vaiselle', 'Lumière', 'Divers'];
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
        $list_user_sold_to = ["Dodo_68", "Isa22", "Paulo", "Dada", "bg_du_93"];
        UserFactory::createMany(20);
        UserFactory::createMany(5, function() use ($list_user_sold_to) {
            return [
                'Sold_to' => $list_user_sold_to[rand(0, count($list_user_sold_to) - 1)],
            ];
        });
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
        // CommentFactory::new()->isChildren()->many(10)->create();

        $manager->flush();
    }
}

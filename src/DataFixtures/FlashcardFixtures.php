<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FlashcardFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        

         $manager->persist($product);

        $manager->flush();
    }
}

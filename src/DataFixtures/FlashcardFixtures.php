<?php

namespace App\DataFixtures;

use App\Entity\Flashcard;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class FlashcardFixtures extends Fixture
{
    private int $batchSize = 34;

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 1024; $i++) {
            $manager->persist(new Flashcard(
                $faker->word,
                $faker->word,
            ));

            if (($this->batchSize % $i) === 0) {
                $manager->flush();
                $manager->clear();
            }
        }

        $manager->flush();
    }
}

<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Voiture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i <= 10; $i++) {

            $car = new Voiture();

            $car->setMarque("Audi " . $i);

            $car->setCouleur("Blanc " . $i);

            $car->setPrix("100.000");

            $manager->persist($car);

        }

        $manager->flush();
    }
}

<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CARfixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $car = new CAR();
        $car -> setMark("Volvo");
        $car -> setPrice(5000);
        $manager -> persist($car);

        $manager -> flush();
    }
}

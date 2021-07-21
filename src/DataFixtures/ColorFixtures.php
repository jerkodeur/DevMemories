<?php

namespace App\DataFixtures;

use App\Entity\Color;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Provider\color as fakerColor;

class ColorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for($i = 0; $i<50; $i++) {
            $color = new Color();
            $color->setCodeText(fakerColor::hexColor());
            $color->setCodeBg(fakerColor::hexColor());
            $manager->persist($color);
        }

        $manager->flush();
    }
}

<?php

namespace App\DataFixtures;

use App\Entity\Color;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Provider\color as fakerColor;

class ColorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        for($i = 1; $i <= 50; $i++) {
            $color = new Color();
            $color->setCodeText(fakerColor::hexColor());
            $color->setCodeBg(fakerColor::hexColor());

            $this->addReference('color' . $i, $color);

            $manager->persist($color);
        }

        $manager->flush();
    }
}

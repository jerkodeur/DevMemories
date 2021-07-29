<?php

namespace App\DataFixtures;

use App\Entity\Type;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;

class TypeFixtures extends Fixture
{
    private $faker;
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->faker = Factory::create('FR_fr');
        $this->em = $em;
    }

    public function load(ObjectManager $manager)
    {
        $type= new Type();
        $type->setLabel('Article de veille');
        $this->addReference('type_1', $type);
        $this->em->persist($type);

        for($i=2;$i<7;$i++) {
            $type = new Type();

            $type->setLabel($this->faker->words(rand(1,4), true));
            $this->addReference('type_' . $i, $type);

            $manager->persist($type);
        }

        $manager->flush();
    }
}

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
        $types = [
            'Article de veille',
            'Extraits de code',
            'Lignes de commande',
            'FLux RSS',
            'Tuto textuel',
            'Tuto vidéo',
            'Définition',
            'Raccourci',
        ];
        $type= new Type();

        for($i=0;$i<count($types);$i++) {
            $type = new Type();

            $type->setLabel($types[$i]);
            $this->addReference('type_' . $i +1, $type);

            $manager->persist($type);
        }

        $manager->flush();
    }
}

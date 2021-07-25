<?php

namespace App\DataFixtures;

use App\Entity\Color;
use App\Repository\UserRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\DataFixtures\UserFixtures;
use Doctrine\Persistence\ObjectManager;
use Faker\Provider\color as fakerColor;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ColorFixtures extends Fixture implements DependentFixtureInterface
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function load(ObjectManager $manager)
    {
        $num_existing_users = count($this->userRepository->findAll());

        for($i = 1; $i < $num_existing_users; $i++){
            $user= $this->userRepository->findBy(['nickname' => 'user_' . $i])[0];

            for($j = 1; $j <= (rand(10,50)); $j++) {
                $color = new Color();
                $color->setCodeText(fakerColor::hexColor());
                $color->setCodeBg(fakerColor::hexColor());
                $color->setUser($user);

                $this->addReference('color_' . $j . 'user_' . $i, $color);

                $manager->persist($color);
            }
        }



        $manager->flush();
    }

    /**
     * Order in which dependencies fixtures will be loaded
     */
    public function getDependencies() {
        return [
            UserFixtures::class
        ];
    }
}

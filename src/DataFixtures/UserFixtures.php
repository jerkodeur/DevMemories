<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker\Factory;

class UserFixtures extends Fixture
{
    private $userPasswordHasher;

    private $faker;

    public function __construct(UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        $this->userPasswordHasher = $userPasswordHasherInterface;
        $this->faker = Factory::create('FR_fr');
    }

    public function load(ObjectManager $manager)
    {
        // User
        $user = new User();
        $user
            ->setEmail('user@user.fr')
            ->setRoles(['ROLE_USER'])
            ->setNickname('user_1')
            ->setPassword($this->userPasswordHasher->hashPassword($user, 'password12345'))
            ->setIsVerified(true);

        $this->addReference('user', $user);

        $manager->persist($user);

        // Administrator
        $user = new User();
        $user
            ->setEmail('admin@admin.fr')
            ->setRoles(['ROLE_ADMIN'])
            ->setNickname('user_2')
            ->setPassword($this->userPasswordHasher->hashPassword($user, 'password12345'))
            ->setIsVerified(true);

        $this->addReference('admin', $user);

        $manager->persist($user);

        // User with e-mail adress not verify
        $user = new User();
        $user
            ->setEmail('no-verif@user.fr')
            ->setRoles(['ROLE_USER'])
            ->setNickname('user_3')
            ->setPassword($this->userPasswordHasher->hashPassword($user, 'password12345'))
            ->setIsVerified(false);

            $manager->persist($user);

        // User with e-mail adress verify
        $user = new User();
        $user
            ->setEmail('verif@user.fr')
            ->setRoles(['ROLE_USER'])
            ->setNickname('user_4')
            ->setPassword($this->userPasswordHasher->hashPassword($user, 'password12345'))
            ->setIsVerified(true);

        $manager->persist($user);

        // Custom users
        for($i = 5; $i <= 10; $i++) {

            $user = new User();
            $user
                ->setEmail('user_' . $i . '@user.fr')
                ->setRoles(['ROLE_USER'])
                ->setNickname('user_' . $i)
                ->setPassword($this->userPasswordHasher->hashPassword($user, 'password12345'))
                ->setIsVerified($this->faker->randomElement([true, false]));

                $this->addReference('user'. $i , $user);

            $manager->persist($user);
        }

        $manager->flush();
    }
}

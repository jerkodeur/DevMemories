<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Content;
use App\DataFixtures\TypeFixtures;
use App\DataFixtures\UserFixtures;
use App\Repository\TypeRepository;
use App\Repository\UserRepository;
use App\DataFixtures\CategoryFixtures;
use App\Repository\CategoryRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ContentFixtures extends Fixture implements DependentFixtureInterface
{
    private UserRepository $userRepository;
    private CategoryRepository $categoryRepository;
    private TypeRepository $typeRepository;
    private $faker;

    public function __construct(UserRepository $userRepository, CategoryRepository $categoryRepository, TypeRepository $typeRepository)
    {
        $this->faker = Factory::create('FR_fr');
        $this->userRepository = $userRepository;
        $this->categoryRepository = $categoryRepository;
        $this->typeRepository = $typeRepository;
    }

    public function load(ObjectManager $manager)
    {
        // For each user
        for ($i=1; $i <= 10; $i++) {
            // Create a custom number of content
            for ($j=1; $j<rand(5,25); $j++) {
                $content = new Content();

                $nb_types = count($this->typeRepository->findAll());
                $nb_users = count($this->userRepository->findAll());

                $content->setTitle($this->faker->words(rand(8,15), true));
                $content->setDescription($this->faker->realText(100));
                $content->setContent($this->faker->realText(rand(200, 500)));
                $content->setPrivate($this->faker->numberBetween(0,1));
                $content->setPublished($this->faker->numberBetween(0,1));
                $content->setType($this->getReference('type_' . rand(1,$nb_types)));

                // Choice a custom user
                $custom_user = 'user_' . rand(1, $nb_users);
                $user = $this->userRepository->findOneBy(
                    [
                    'nickname' => $custom_user
                    ]);
                $content->setUser($this->userRepository->findBy(['nickname' => $custom_user])[0]);

                // And a category belonging to the user
                $user_categories = $this->categoryRepository->findBy(
                    [
                        'user' => $user->getId()
                    ]);

                $content->setCategory($user_categories[rand(0, count($user_categories))] ?? null);

                // Add a new reference
                $this->addReference('content_' . $j . '&user_' . $i , $content);

                $manager->persist($content);
            }
        }

        $manager->flush();
    }

    /**
     * Order in which dependencies fixtures will be loaded
     */
    public function getDependencies() {
        return [
            TypeFixtures::class,
            UserFixtures::class,
            CategoryFixtures::class,
        ];
    }
}

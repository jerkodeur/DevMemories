<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Category;
use App\DataFixtures\UserFixtures;
use App\Repository\UserRepository;
use App\DataFixtures\ColorFixtures;
use App\Repository\ColorRepository;
use App\Repository\CategoryRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class CategoryFixtures extends Fixture implements DependentFixtureInterface
{
    private UserRepository $userRepository;
    private ColorRepository $colorRepository;
    private CategoryRepository $categoryRepository;
    private $faker;

    public function __construct(UserRepository $userRepository, ColorRepository $colorRepository, CategoryRepository $categoryRepository)
    {
        $this->faker = Factory::create('FR_fr');
        $this->userRepository = $userRepository;
        $this->colorRepository = $colorRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function load(ObjectManager $manager)
    {
        $num_existing_users = count($this->userRepository->findAll());

        for($i = 1; $i < $num_existing_users; $i++){
            $this->CreateSubCategories($manager, 'user_' . $i, rand(1,3));
        }
    }

    /**
     * Create the category fixtures with the subcategorie levels defined
     *
     * @param \Doctrine\Persistence\ObjectManager $manager
     * @param string|null $userReference The reference to be associate to the category
     * @param integer $levels Number of subcategory levels
     * @param integer $loops Number of category to create by loop
     */
    private function CreateSubCategories(ObjectManager $manager, string $userReference, int $levels = 1, int $loops = 25) {
        if($levels > 0) {

            $num_existing_colors = count($this->colorRepository->findAll());
            $user= $this->userRepository->findBy(['nickname' => $userReference])[0];
            $num_existing_user_categories = count($this->categoryRepository->findBy(['user' => $user->getId()]));

            for($i= 1; $i <= $loops; $i++) {
                $category = new Category();
                $category->setLabel($this->faker->word);
                $category->setUser($user);
                $category->setColor($this->getReference('color' . rand(1, $num_existing_colors)));

                if($num_existing_user_categories > 0) {
                    $category->setParent($this->getReference('category_' . $user->getId() . '_' . rand(1, $num_existing_user_categories)));
                }
                $this->addReference('category_' . $user->getId() . '_' . $num_existing_user_categories + $i, $category);

                $manager->persist($category);
            }

            $manager->flush();

            return $this->CreateSubCategories($manager, $userReference, $levels - 1, $loops);
        }
    }

    /**
     * Order in which dependencies fixtures will be loaded
     */
    public function getDependencies() {
        return [
            UserFixtures::class,
            ColorFixtures::class
        ];
    }
}

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
        $this->CreateSubCategories($manager, 'user', 3);
        $this->CreateSubCategories($manager, 'admin', 3);
        $this->CreateSubCategories($manager, null, rand(1,3), rand(5,25) );
    }

    /**
     * Create the category fixtures with the subcategorie levels defined
     *
     * @param \Doctrine\Persistence\ObjectManager $manager
     * @param string|null $userReference The reference to be associate to the category
     * @param integer $levels Number of subcategory levels
     * @param integer $loops Number of category to create by loop
     */
    public function CreateSubCategories(ObjectManager $manager, string|null $userReference = null, int $levels = 1, int $loops = 25) {
        if($levels > 0) {

            $num_existing_colors = count($this->colorRepository->findAll());
            $num_existing_users = count($this->userRepository->findAll());
            $num_existing_categories = count($this->categoryRepository->findAll());

            for($i= 1; $i <= $loops; $i++) {
                $category = new Category();
                $category->setLabel($this->faker->word);
                $category->adduser($this->getReference($userReference ?? 'user' . rand(1, $num_existing_users - 4) ));
                $category->setColor($this->getReference('color' . rand(1, $num_existing_colors)));

                if($num_existing_categories > 0) {
                    $category->setParent($this->getReference('category' . rand(1, $num_existing_categories)));
                }

                $this->addReference('category' . $num_existing_categories + $i, $category);

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

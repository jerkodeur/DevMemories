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
    private array $categories = [
        'React', 'Javascript', 'php', 'CSS', 'SCSS', 'PHP', 'Symfony', 'Laravel', 'HTML', 'Fixtures', 'Instructions',
        'Commande', 'VsCode', 'Responsive', 'Design', 'Web', 'Accessibilité', 'Couleur', 'Tableaux', 'Liens', 'Bonne pratique',
        'tag', 'Java', 'Python', null, 'Datatable', 'Controlleur', 'Vue', 'Base de données', 'mysql', 'bootstrap', 'TailwindCSS',
        'SEO', 'Figma', 'ReactJS', 'VueJs', 'TypeScript', 'Test unitaire', 'Django', 'Markdown', 'Git', 'Github', 'Google', 'Google Chrome', 'Extension', 'tag', 'Système', 'Console', 'sh', 'Config', 'Test', 'Key', 'Tutoriel', 'NoddeJS', 'MongoDB', 'PostGres', 'Bonne pratique', 'standard', 'Optimisation', 'Refactoring', 'MVC', 'POO', 'Js', 'Lien', 'Url', 'Programme', 'Application', 'Configuration', 'C++', 'C',
        'C#', 'Mot clé', 'DevOps', 'Materiel-UI', 'Algorithme', 'Arborescence', 'Balise', 'Cookie', 'Token', 'Encodage', 'Session', 'Réseau', 'Ergonomie', 'e-mail', 'Mail', 'Expérience utilisateur', 'Flash', 'Formulaire', 'Images', 'Compression', 'Stockage', 'Hébergeur',
        'HTTP', 'Requête', 'Response', 'Connexion', 'Image', 'Compression', 'Fichier', 'Boucle', 'Keywords', 'Menu', 'Select', 'Input', 'Checkbox', 'Meta tag', 'Norme', 'Permalink', 'Plugin', 'Bundle', 'Form', 'Repository', 'Protocole', 'Ranking', 'Redirect', 'Route', 'Paramètres', 'Options', 'Référencement', 'Ressource', 'Serveur', 'Site Web', 'Serveur Web', 'Video', 'Tutoriel', 'SMTP', 'Streaming',
        'W3C', 'Asynchrone', 'Widget'
    ];
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
            $this->CreateSubCategories($manager, 'user_' . $i, 3);
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
    private function CreateSubCategories(ObjectManager $manager, string $userReference, int $levels = 1, int $loops = 10) {
        if($levels > 0) {

            $user= $this->userRepository->findBy(['nickname' => $userReference])[0];
            $num_existing_colors = count($this->colorRepository->findBy([
                'user' => $user->getId()
            ]));
            $num_existing_user_categories = count($this->categoryRepository->findBy([
                'user' => $user->getId()
            ]));

            for($i= 1; $i <= $loops; $i++) {
                $category = new Category();
                $random_category_label = $this->categories[rand(0,count($this->categories) -1)];
                $random_category_label != 'null' && $category->setLabel($random_category_label);
                $category->setUser($user);
                $category->setColor($this->getReference('color_' . rand(1, $num_existing_colors) . $userReference));

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

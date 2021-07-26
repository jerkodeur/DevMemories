<?php

namespace App\Repository;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Category|null find($id, $lockMode = null, $lockVersion = null)
 * @method Category|null findOneBy(array $criteria, array $orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }

    public function findUserParentCategories(int $user_id): array
    {
        return $this->createQueryBuilder('c')
            ->andwhere('c.parent IS NULL')
            ->andWhere('c.user = :user_id')
            ->setParameter('user_id', $user_id)
            ->orderBy('c.label', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findByParentCategories(int $user_id, string $label): array
    {
        return $this->createQueryBuilder('c')
            ->andwhere('c.parent IS NULL')
            ->andWhere('c.label = :label_id')
            ->andWhere('c.user = :user_id')
            ->setParameter('user_id', $user_id)
            ->setParameter('label_id', $label)
            ->getQuery()
            ->getResult();
    }
    // public function findCategoriesWithSub()
    // {
    //     $parent_categories = $this->findUserParentCategories($this->getUser()->getId());
    //     $categories = [];
    //     foreach ($parent_categories as $index => $parent) {

    //         $subCategory = $this->createQueryBuilder('c')
    //             ->where('c.parent = :parent')
    //             ->setParameter('parent', $parent->id)
    //             ->orderBy('c.label', 'ASC')
    //             ->getQuery()
    //             ->getResult();
    //         $categories[$parent->label][] = $subCategory;
    //         return;
    //     }
    // }

    // /**
    //  * @return Category[] Returns an array of Category objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Category
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

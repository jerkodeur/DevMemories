<?php

namespace App\Repository;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Expr;
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

    /**
     * Return the parent categories of the user
     *
     * @param integer $user_id
     *
     * @return array
     */
    public function findUserParentCategories(int $user_id): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.parent IS NULL')
            ->andWhere('c.user = :user_id')
            ->setParameter('user_id', $user_id)
            ->orderBy('c.label', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Return the subcategories belonging of the parent category
     *
     * @param integer $user_id
     * @param string $label
     *
     * @return array
     */
    public function findCategoriesByNoParent(int $user_id, string $label): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.parent IS NULL')
            ->andWhere('c.label = :label_id')
            ->andWhere('c.user = :user_id')
            ->setParameter('user_id', $user_id)
            ->setParameter('label_id', $label)
            ->getQuery()
            ->getResult();
    }

    /**
     * Return the categories with the same parent depending of the user and the subcategory
     *
     * @param integer $user_id
     * @param string $label
     *
     * @return array
     */
    public function findDuplicateCategories(string $label, int $cat_id, int $user_id, null|int $parent_id): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.label = :label_id')
            ->andWhere('c.user = :user_id')
            ->andWhere('c.id != :cat_id')
            ->andWhere(
                new Expr\Orx([
                    "c.parent IS NULL",
                    "c.parent = :parent_id",
                ])
            )
            ->setParameter('user_id', $user_id)
            ->setParameter('cat_id', $cat_id)
            ->setParameter('label_id', $label)
            ->setParameter('parent_id', $parent_id)
            ->getQuery()
            ->getResult();
    }

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

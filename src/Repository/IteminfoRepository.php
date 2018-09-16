<?php

namespace App\Repository;

use App\Entity\Iteminfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Iteminfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Iteminfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Iteminfo[]    findAll()
 * @method Iteminfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IteminfoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Iteminfo::class);
    }

//    /**
//     * @return Iteminfo[] Returns an array of Iteminfo objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Iteminfo
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function fcat($category): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT c
        FROM App\entity\Iteminfo c
        WHERE c.type = :category
        ORDER BY c.itemname ASC'
        )-> setParameter('category', $category);

        return $query->execute();
    }
}

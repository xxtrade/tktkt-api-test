<?php

namespace App\Repository;

use App\Entity\ItemAttention;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ItemAttention|null find($id, $lockMode = null, $lockVersion = null)
 * @method ItemAttention|null findOneBy(array $criteria, array $orderBy = null)
 * @method ItemAttention[]    findAll()
 * @method ItemAttention[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ItemAttentionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ItemAttention::class);
    }

    // /**
    //  * @return ItemAttention[] Returns an array of ItemAttention objects
    //  */

    public function getByItemId($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.itemId = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->getQuery()
            ->getArrayResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?ItemAttention
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

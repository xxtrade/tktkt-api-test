<?php

namespace App\Repository;

use App\Entity\ChildItemsDataMaster;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChildItemsDataMaster|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChildItemsDataMaster|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChildItemsDataMaster[]    findAll()
 * @method ChildItemsDataMaster[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChildItemsDataMasterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChildItemsDataMaster::class);
    }

    // /**
    //  * @return ChildItemsDataMaster[] Returns an array of ChildItemsDataMaster objects
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

    // /**
    //  * @return ChildItemsDataMaster[] Returns an array of ChildItemsDataMaster objects
    //  */
    
    public function getAll()
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.id', 'ASC')
            ->getQuery()
            ->getArrayResult()
        ;
    }
    
    
    public function findByItemId($value): ?ChildItemsDataMaster
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.item_id = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    
}

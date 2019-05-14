<?php

namespace App\Repository;

use App\Entity\Compagne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Compagne|null find($id, $lockMode = null, $lockVersion = null)
 * @method Compagne|null findOneBy(array $criteria, array $orderBy = null)
 * @method Compagne[]    findAll()
 * @method Compagne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompagneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Compagne::class);
    }

    // /**
    //  * @return Compagne[] Returns an array of Compagne objects
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
    public function findOneBySomeField($value): ?Compagne
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

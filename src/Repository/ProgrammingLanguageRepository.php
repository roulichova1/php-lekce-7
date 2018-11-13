<?php

namespace App\Repository;

use App\Entity\ProgrammingLanguage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProgrammingLanguage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProgrammingLanguage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProgrammingLanguage[]    findAll()
 * @method ProgrammingLanguage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammingLanguageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProgrammingLanguage::class);
    }
    
    
/**
     * @return ProgrammingLanguage[]
     */
    public function findKnown()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.testBoolean == 1')      
            ->getQuery()
            ->getResult()    
        ; 
    }

//    /**
//     * @return ProgrammingLanguage[] Returns an array of ProgrammingLanguage objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProgrammingLanguage
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

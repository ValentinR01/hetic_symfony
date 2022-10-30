<?php

namespace App\Repository;

use App\Entity\Category;
use App\Entity\Deal;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Deal>
 *
 * @method Deal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Deal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Deal[]    findAll()
 * @method Deal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DealRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Deal::class);
    }

    public function save(Deal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Deal $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Deals[] Return an array of Product objects
     */
    public function findDealBySeller(User $value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.Seller = :val')
            ->setParameter('val', $value)
            ->orderBy('p.Date_creation', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param string|null $search
     * @return QueryBuilder
     */
    public function findAllQueryBuilder(string $search = null): QueryBuilder
    {
        $queryBuilder = $this->createQueryBuilder('m');

        if ($search !== null) {
            $queryBuilder
                ->setParameter('searchTerm', '%' . $search . '%');
        }

        return $queryBuilder;
    }

    /**
     * @param array $cat
     * @param string|null $search
     * @return QueryBuilder
     */
    public function findByCategoryQueryBuilder(array $cat, string $search = null) : QueryBuilder
    {
        $queryBuilder = $this->createQueryBuilder('n')
            ->andWhere('n.Category = :cat')
            ->setParameter('cat', $cat);

        if ($search !== null) {
            $queryBuilder
                ->setParameter('searchTerm', '%' . $search .'%');
        }

        return $queryBuilder;
    }

    /**
     * @return Recommendations[] Return an array of Product objects
     */
    public function findRecommendationsByDeal(int $id, Category $cat)
    {

        return $this->createQueryBuilder('r')
            ->andWhere('r.id != :id')
            ->setParameter('id', $id)
            ->andWhere('r.Category = :cat')
            ->setParameter('cat', $cat)
            ->andWhere('r.Is_published  = 1')
            ->andWhere('r.Is_sold = 0')
            ->orderBy('r.Date_publication', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return findAllDeals[] Return all deals
     */
    public function findAllDeals()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.Is_sold = 0')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return void
     */
    public function search($words)
    {
        $query = $this->createQueryBuilder('a');
        //$query->where('a.Is_sold = 0');
        if ($words != null) {
            $query->andWhere('MATCH_AGAINST(a.Title, a.Description) AGAINST(:words boolean)>0')
                ->setParameter('words', $words);
        }

        return $query->getQuery()->getResult();
    }
}


//    /**
//     * @return Deal[] Returns an array of Deal objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Deal
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

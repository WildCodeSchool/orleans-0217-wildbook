<?php

namespace BookBundle\Repository;

/**
 * ProjectRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectRepository extends \Doctrine\ORM\EntityRepository
{
    public function searchBy($schools, $categories, $promotions)
    {
        $qb = $this->createQueryBuilder('p');

        if (!$schools->isEmpty()) {
            $qb
                ->andWhere('p.school IN (:school)')
                    ->setParameter('school', $schools);
        }

        if (!$categories->isEmpty()) {
            $qb
                ->andWhere('p.category IN (:category)')
                    ->setParameter('category', $categories);
        }

        if (!$promotions->isEmpty()) {
            $qb
                ->leftJoin('p.school','s')
                ->leftJoin('s.promotions','pr', 'pr.school_id = s.id')
                ->where('pr.id IN (:promotion)')
                    ->setParameter('promotion', $promotions);
        }

        return $qb->getQuery()->getResult();
    }

    public function getLike($input)
    {
        $input = "%" . $input . "%";
        $qb = $this->createQueryBuilder('p')
            ->where('p.title LIKE :title')
                ->setParameter('title', $input)
            ->leftJoin('p.pictures','pi')
            ->andWhere('pi.isPrincipal = :true')
                ->setParameter('true', true)
            ->getQuery();
        return $qb->getResult();
    }


    public function getLikeAdmin($input)
    {
        $input = "%" . $input . "%";
        $qb = $this->createQueryBuilder('p')
            ->select('p.title','p.id','p.customer','p.date','p.status','c.label','s.school','p.path')
            ->leftJoin('p.category','c')
            ->leftJoin('p.school','s')
            ->where('p.title LIKE :title')
                ->setParameter('title', $input)
            ->getQuery();
        return $qb->getResult();
    }

    public function homeProject()
    {
        $qb = $this->createQueryBuilder('p')
            ->where('p.homeProject = :homeProject')
                ->setParameter('homeProject', true)
            ->getQuery();
        return $qb->getResult();
    }

    public function projectsByWilder($input)
    {
        $qb = $this->createQueryBuilder('p')
            ->leftJoin('p.projectWilders','pw')
            ->leftJoin('pw.wilder','w')
            ->leftJoin('w.user','u')
            ->where('u.id = :id')
            ->setParameter('id',$input)
            ->getQuery();
        return $qb->getResult();
    }

}

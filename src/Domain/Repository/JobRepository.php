<?php
/**
 * Created by PhpStorm.
 * User: bidule
 * Date: 2018-12-21
 * Time: 10:26
 */

namespace App\Domain\Repository;


use App\Domain\Entity\Job;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class JobRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Job::class);
    }
}
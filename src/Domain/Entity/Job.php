<?php
/**
 * Created by PhpStorm.
 * User: bidule
 * Date: 2018-12-21
 * Time: 10:24
 */

namespace App\Domain\Entity;


use Ramsey\Uuid\Uuid;

class Job
{
    /**
     * @var Uuid
     */
    private $id;

    /**
     * @var string
     */
    private $job;

    /**
     * Job constructor.
     *
     * @param string $job
     * @throws \Exception
     */
    public function __construct(string $job)
    {
        $this->id = Uuid::uuid4();
        $this->job = $job;
    }

    /**
     * @return Uuid
     */
    public function getId(): Uuid
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getJob(): string
    {
        return $this->job;
    }
}

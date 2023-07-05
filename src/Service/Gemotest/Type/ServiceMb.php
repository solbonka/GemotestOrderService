<?php

namespace App\Service\Gemotest\Type;

class ServiceMb
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $mat_id;

    /**
     * @var string
     */
    private $mat_name;

    /**
     * @var string
     */
    private $loc_id;

    /**
     * @var string
     */
    private $loc_name;

    /**
     * @var int
     */
    private $status_mb;

    /**
     * @var \App\Service\Gemotest\Type\Microbe
     */
    private $microbe;

    /**
     * @var \App\Service\Gemotest\Type\Antibiotic
     */
    private $antibiotic;

    /**
     * @var \DateTimeInterface
     */
    private $result_date;

    public function getId()
    {
        return $this->id;
    }

    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    public function getName()
    {
        return $this->name;
    }

    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getMat_id()
    {
        return $this->mat_id;
    }

    public function withMat_id($mat_id)
    {
        $new = clone $this;
        $new->mat_id = $mat_id;

        return $new;
    }

    public function getMat_name()
    {
        return $this->mat_name;
    }

    public function withMat_name($mat_name)
    {
        $new = clone $this;
        $new->mat_name = $mat_name;

        return $new;
    }

    public function getLoc_id()
    {
        return $this->loc_id;
    }

    public function withLoc_id($loc_id)
    {
        $new = clone $this;
        $new->loc_id = $loc_id;

        return $new;
    }

    public function getLoc_name()
    {
        return $this->loc_name;
    }

    public function withLoc_name($loc_name)
    {
        $new = clone $this;
        $new->loc_name = $loc_name;

        return $new;
    }

    public function getStatus_mb()
    {
        return $this->status_mb;
    }

    public function withStatus_mb($status_mb)
    {
        $new = clone $this;
        $new->status_mb = $status_mb;

        return $new;
    }

    public function getMicrobe()
    {
        return $this->microbe;
    }

    public function withMicrobe($microbe)
    {
        $new = clone $this;
        $new->microbe = $microbe;

        return $new;
    }

    public function getAntibiotic()
    {
        return $this->antibiotic;
    }

    public function withAntibiotic($antibiotic)
    {
        $new = clone $this;
        $new->antibiotic = $antibiotic;

        return $new;
    }

    public function getResult_date()
    {
        return $this->result_date;
    }

    public function withResult_date($result_date)
    {
        $new = clone $this;
        $new->result_date = $result_date;

        return $new;
    }
}


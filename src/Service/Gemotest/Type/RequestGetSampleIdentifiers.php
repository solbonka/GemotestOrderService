<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestGetSampleIdentifiers implements RequestInterface
{
    /**
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var int
     */
    private $identifiers_count;

    public function __construct($contractor, $hash, $identifiers_count)
    {
        $this->contractor = $contractor;
        $this->hash = $hash;
        $this->identifiers_count = $identifiers_count;
    }

    public function getContractor()
    {
        return $this->contractor;
    }

    public function withContractor($contractor)
    {
        $new = clone $this;
        $new->contractor = $contractor;

        return $new;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }

    public function getIdentifiers_count()
    {
        return $this->identifiers_count;
    }

    public function withIdentifiers_count($identifiers_count)
    {
        $new = clone $this;
        $new->identifiers_count = $identifiers_count;

        return $new;
    }
}


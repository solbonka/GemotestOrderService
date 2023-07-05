<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SampleIdentifiersRange implements ResultInterface
{
    /**
     * @var \App\Service\Gemotest\Type\ErrorDescription
     */
    private $error_description;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $range_start;

    /**
     * @var string
     */
    private $range_end;

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

    public function getError_description()
    {
        return $this->error_description;
    }

    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    public function getRange_start()
    {
        return $this->range_start;
    }

    public function withRange_start($range_start)
    {
        $new = clone $this;
        $new->range_start = $range_start;

        return $new;
    }

    public function getRange_end()
    {
        return $this->range_end;
    }

    public function withRange_end($range_end)
    {
        $new = clone $this;
        $new->range_end = $range_end;

        return $new;
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


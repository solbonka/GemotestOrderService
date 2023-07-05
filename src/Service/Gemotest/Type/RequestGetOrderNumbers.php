<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestGetOrderNumbers implements RequestInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $order_date;

    /**
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var \DateTimeInterface
     */
    private $from_date;

    /**
     * @var \DateTimeInterface
     */
    private $to_date;

    public function __construct($order_date, $contractor, $hash, $from_date, $to_date)
    {
        $this->order_date = $order_date;
        $this->contractor = $contractor;
        $this->hash = $hash;
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }

    public function getOrder_date()
    {
        return $this->order_date;
    }

    public function withOrder_date($order_date)
    {
        $new = clone $this;
        $new->order_date = $order_date;

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

    public function getFrom_date()
    {
        return $this->from_date;
    }

    public function withFrom_date($from_date)
    {
        $new = clone $this;
        $new->from_date = $from_date;

        return $new;
    }

    public function getTo_date()
    {
        return $this->to_date;
    }

    public function withTo_date($to_date)
    {
        $new = clone $this;
        $new->to_date = $to_date;

        return $new;
    }
}


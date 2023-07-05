<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestGetOrderStatus implements RequestInterface
{
    /**
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $orders;

    /**
     * @var string
     */
    private $hash;

    public function __construct($contractor, $orders, $hash)
    {
        $this->contractor = $contractor;
        $this->orders = $orders;
        $this->hash = $hash;
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

    public function getOrders()
    {
        return $this->orders;
    }

    public function withOrders($orders)
    {
        $new = clone $this;
        $new->orders = $orders;

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
}


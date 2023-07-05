<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetOrderNumbers implements ResultInterface
{
    /**
     * @var int
     */
    private $orders_count;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \App\Service\Gemotest\Type\ErrorDescription
     */
    private $error_description;

    /**
     * @var \App\Service\Gemotest\Type\Order
     */
    private $orders;

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

    public function getOrders_count()
    {
        return $this->orders_count;
    }

    public function withOrders_count($orders_count)
    {
        $new = clone $this;
        $new->orders_count = $orders_count;

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


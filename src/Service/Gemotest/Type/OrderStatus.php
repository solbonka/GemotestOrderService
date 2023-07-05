<?php

namespace App\Service\Gemotest\Type;

class OrderStatus
{
    /**
     * @var string
     */
    private $order_num;

    /**
     * @var string
     */
    private $status;

    public function getOrder_num()
    {
        return $this->order_num;
    }

    public function withOrder_num($order_num)
    {
        $new = clone $this;
        $new->order_num = $order_num;

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
}


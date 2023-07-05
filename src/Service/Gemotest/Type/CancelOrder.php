<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelOrder implements RequestInterface
{
    /**
     * @var int
     */
    private $order_status;

    /**
     * @var string
     */
    private $ext_num;

    /**
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var string
     */
    private $order_num;

    public function __construct($order_status, $ext_num, $contractor, $hash, $order_num)
    {
        $this->order_status = $order_status;
        $this->ext_num = $ext_num;
        $this->contractor = $contractor;
        $this->hash = $hash;
        $this->order_num = $order_num;
    }

    public function getOrder_status()
    {
        return $this->order_status;
    }

    public function withOrder_status($order_status)
    {
        $new = clone $this;
        $new->order_status = $order_status;

        return $new;
    }

    public function getExt_num()
    {
        return $this->ext_num;
    }

    public function withExt_num($ext_num)
    {
        $new = clone $this;
        $new->ext_num = $ext_num;

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
}


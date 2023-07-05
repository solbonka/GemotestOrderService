<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestGetAnalysisResult implements RequestInterface
{
    /**
     * @var string
     */
    private $order_num;

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

    public function __construct($order_num, $ext_num, $contractor, $hash)
    {
        $this->order_num = $order_num;
        $this->ext_num = $ext_num;
        $this->contractor = $contractor;
        $this->hash = $hash;
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
}


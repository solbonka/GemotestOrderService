<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseStatusRequest implements ResultInterface
{
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
    private $order;

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

    public function getOrder()
    {
        return $this->order;
    }

    public function withOrder($order)
    {
        $new = clone $this;
        $new->order = $order;

        return $new;
    }
}


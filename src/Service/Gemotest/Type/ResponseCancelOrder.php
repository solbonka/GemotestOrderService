<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseCancelOrder implements ResultInterface
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
     * @var \App\Service\Gemotest\Type\CancelOrder
     */
    private $cancel_order;

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

    public function getCancel_order()
    {
        return $this->cancel_order;
    }

    public function withCancel_order($cancel_order)
    {
        $new = clone $this;
        $new->cancel_order = $cancel_order;

        return $new;
    }
}


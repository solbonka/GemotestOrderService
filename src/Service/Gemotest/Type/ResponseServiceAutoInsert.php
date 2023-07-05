<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseServiceAutoInsert implements ResultInterface
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
     * @var \App\Service\Gemotest\Type\ResponseServiceAutoInsertItem
     */
    private $service_auto_insert_item;

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

    public function getService_auto_insert_item()
    {
        return $this->service_auto_insert_item;
    }

    public function withService_auto_insert_item($service_auto_insert_item)
    {
        $new = clone $this;
        $new->service_auto_insert_item = $service_auto_insert_item;

        return $new;
    }
}


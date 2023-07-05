<?php

namespace App\Service\Gemotest\Type;

class ResponseServiceAutoInsertItem
{
    /**
     * @var string
     */
    private $service_id;

    /**
     * @var string
     */
    private $auto_insert_service_id;

    public function getService_id()
    {
        return $this->service_id;
    }

    public function withService_id($service_id)
    {
        $new = clone $this;
        $new->service_id = $service_id;

        return $new;
    }

    public function getAuto_insert_service_id()
    {
        return $this->auto_insert_service_id;
    }

    public function withAuto_insert_service_id($auto_insert_service_id)
    {
        $new = clone $this;
        $new->auto_insert_service_id = $auto_insert_service_id;

        return $new;
    }
}


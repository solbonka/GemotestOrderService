<?php

namespace App\Service\Gemotest\Type;

class ResultsMb
{
    /**
     * @var \App\Service\Gemotest\Type\ServiceMb
     */
    private $service_mb;

    public function getService_mb()
    {
        return $this->service_mb;
    }

    public function withService_mb($service_mb)
    {
        $new = clone $this;
        $new->service_mb = $service_mb;

        return $new;
    }
}


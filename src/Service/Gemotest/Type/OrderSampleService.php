<?php

namespace App\Service\Gemotest\Type;

class OrderSampleService
{
    /**
     * @var string
     */
    private $service_id;

    /**
     * @var string
     */
    private $complex_id;

    /**
     * @var bool
     */
    private $utilization_flag;

    /**
     * @var bool
     */
    private $refuse_flag;

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

    public function getComplex_id()
    {
        return $this->complex_id;
    }

    public function withComplex_id($complex_id)
    {
        $new = clone $this;
        $new->complex_id = $complex_id;

        return $new;
    }

    public function getUtilization_flag()
    {
        return $this->utilization_flag;
    }

    public function withUtilization_flag($utilization_flag)
    {
        $new = clone $this;
        $new->utilization_flag = $utilization_flag;

        return $new;
    }

    public function getRefuse_flag()
    {
        return $this->refuse_flag;
    }

    public function withRefuse_flag($refuse_flag)
    {
        $new = clone $this;
        $new->refuse_flag = $refuse_flag;

        return $new;
    }
}


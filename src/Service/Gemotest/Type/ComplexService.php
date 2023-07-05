<?php

namespace App\Service\Gemotest\Type;

class ComplexService
{
    /**
     * @var string
     */
    private $complex_id;

    /**
     * @var string
     */
    private $service_id;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $localization_id;

    /**
     * @var string
     */
    private $biomaterial_id;

    /**
     * @var string
     */
    private $transport_id;

    /**
     * @var string
     */
    private $main_service;

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

    public function getPrice()
    {
        return $this->price;
    }

    public function withPrice($price)
    {
        $new = clone $this;
        $new->price = $price;

        return $new;
    }

    public function getLocalization_id()
    {
        return $this->localization_id;
    }

    public function withLocalization_id($localization_id)
    {
        $new = clone $this;
        $new->localization_id = $localization_id;

        return $new;
    }

    public function getBiomaterial_id()
    {
        return $this->biomaterial_id;
    }

    public function withBiomaterial_id($biomaterial_id)
    {
        $new = clone $this;
        $new->biomaterial_id = $biomaterial_id;

        return $new;
    }

    public function getTransport_id()
    {
        return $this->transport_id;
    }

    public function withTransport_id($transport_id)
    {
        $new = clone $this;
        $new->transport_id = $transport_id;

        return $new;
    }

    public function getMain_service()
    {
        return $this->main_service;
    }

    public function withMain_service($main_service)
    {
        $new = clone $this;
        $new->main_service = $main_service;

        return $new;
    }
}


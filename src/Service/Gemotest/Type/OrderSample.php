<?php

namespace App\Service\Gemotest\Type;

class OrderSample
{
    /**
     * @var \App\Service\Gemotest\Type\OrderSampleAliquot
     */
    private $aliquots;

    /**
     * @var int
     */
    private $sample_id;

    /**
     * @var string
     */
    private $sample_identifier;

    /**
     * @var string
     */
    private $microbiology_biomaterial_id;

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
     * @var \App\Service\Gemotest\Type\OrderSampleService
     */
    private $services;

    public function getAliquots()
    {
        return $this->aliquots;
    }

    public function withAliquots($aliquots)
    {
        $new = clone $this;
        $new->aliquots = $aliquots;

        return $new;
    }

    public function getSample_id()
    {
        return $this->sample_id;
    }

    public function withSample_id($sample_id)
    {
        $new = clone $this;
        $new->sample_id = $sample_id;

        return $new;
    }

    public function getSample_identifier()
    {
        return $this->sample_identifier;
    }

    public function withSample_identifier($sample_identifier)
    {
        $new = clone $this;
        $new->sample_identifier = $sample_identifier;

        return $new;
    }

    public function getMicrobiology_biomaterial_id()
    {
        return $this->microbiology_biomaterial_id;
    }

    public function withMicrobiology_biomaterial_id($microbiology_biomaterial_id)
    {
        $new = clone $this;
        $new->microbiology_biomaterial_id = $microbiology_biomaterial_id;

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

    public function getServices()
    {
        return $this->services;
    }

    public function withServices($services)
    {
        $new = clone $this;
        $new->services = $services;

        return $new;
    }
}


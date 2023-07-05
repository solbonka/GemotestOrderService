<?php

namespace App\Service\Gemotest\Type;

class Barcode
{
    /**
     * @var string
     */
    private $barcode;

    /**
     * @var string
     */
    private $sample_description;

    /**
     * @var string
     */
    private $sample_id;

    /**
     * @var string
     */
    private $biomaterial_id;

    /**
     * @var string
     */
    private $biomaterial_name;

    /**
     * @var string
     */
    private $localization_id;

    /**
     * @var string
     */
    private $localization_name;

    /**
     * @var string
     */
    private $transport_id;

    /**
     * @var string
     */
    private $transport_name;

    public function getBarcode()
    {
        return $this->barcode;
    }

    public function withBarcode($barcode)
    {
        $new = clone $this;
        $new->barcode = $barcode;

        return $new;
    }

    public function getSample_description()
    {
        return $this->sample_description;
    }

    public function withSample_description($sample_description)
    {
        $new = clone $this;
        $new->sample_description = $sample_description;

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

    public function getBiomaterial_name()
    {
        return $this->biomaterial_name;
    }

    public function withBiomaterial_name($biomaterial_name)
    {
        $new = clone $this;
        $new->biomaterial_name = $biomaterial_name;

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

    public function getLocalization_name()
    {
        return $this->localization_name;
    }

    public function withLocalization_name($localization_name)
    {
        $new = clone $this;
        $new->localization_name = $localization_name;

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

    public function getTransport_name()
    {
        return $this->transport_name;
    }

    public function withTransport_name($transport_name)
    {
        $new = clone $this;
        $new->transport_name = $transport_name;

        return $new;
    }
}


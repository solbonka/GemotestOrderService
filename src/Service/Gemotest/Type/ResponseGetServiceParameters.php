<?php

namespace App\Service\Gemotest\Type;

class ResponseGetServiceParameters
{
    /**
     * @var string
     */
    private $service_id;

    /**
     * @var string
     */
    private $biomaterial_id;

    /**
     * @var string
     */
    private $localization_id;

    /**
     * @var string
     */
    private $transport_id;

    /**
     * @var int
     */
    private $archive;

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

    public function getArchive()
    {
        return $this->archive;
    }

    public function withArchive($archive)
    {
        $new = clone $this;
        $new->archive = $archive;

        return $new;
    }
}


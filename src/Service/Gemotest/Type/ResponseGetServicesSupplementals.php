<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetServicesSupplementals implements ResultInterface
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
     * @var \App\Service\Gemotest\Type\Supplemental
     */
    private $supplementals;

    /**
     * @var \App\Service\Gemotest\Type\Contingent
     */
    private $contingents;

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

    public function getSupplementals()
    {
        return $this->supplementals;
    }

    public function withSupplementals($supplementals)
    {
        $new = clone $this;
        $new->supplementals = $supplementals;

        return $new;
    }

    public function getContingents()
    {
        return $this->contingents;
    }

    public function withContingents($contingents)
    {
        $new = clone $this;
        $new->contingents = $contingents;

        return $new;
    }
}


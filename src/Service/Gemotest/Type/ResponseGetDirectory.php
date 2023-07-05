<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetDirectory implements ResultInterface
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
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $description_directory;

    /**
     * @var \App\Service\Gemotest\Type\Service
     */
    private $service;

    /**
     * @var \App\Service\Gemotest\Type\Services
     */
    private $services;

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

    public function getContractor()
    {
        return $this->contractor;
    }

    public function withContractor($contractor)
    {
        $new = clone $this;
        $new->contractor = $contractor;

        return $new;
    }

    public function getDescription_directory()
    {
        return $this->description_directory;
    }

    public function withDescription_directory($description_directory)
    {
        $new = clone $this;
        $new->description_directory = $description_directory;

        return $new;
    }

    public function getService()
    {
        return $this->service;
    }

    public function withService($service)
    {
        $new = clone $this;
        $new->service = $service;

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


<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetTests implements ResultInterface
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
     * @var \App\Service\Gemotest\Type\ResponseGetTest
     */
    private $tests;

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

    public function getTests()
    {
        return $this->tests;
    }

    public function withTests($tests)
    {
        $new = clone $this;
        $new->tests = $tests;

        return $new;
    }
}


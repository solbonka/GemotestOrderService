<?php

namespace App\Service\Gemotest\Type;

class ResponseGetTest
{
    /**
     * @var string
     */
    private $service_id;

    /**
     * @var string
     */
    private $test_id;

    /**
     * @var string
     */
    private $test_name;

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

    public function getTest_id()
    {
        return $this->test_id;
    }

    public function withTest_id($test_id)
    {
        $new = clone $this;
        $new->test_id = $test_id;

        return $new;
    }

    public function getTest_name()
    {
        return $this->test_name;
    }

    public function withTest_name($test_name)
    {
        $new = clone $this;
        $new->test_name = $test_name;

        return $new;
    }
}


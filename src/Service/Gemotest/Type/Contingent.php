<?php

namespace App\Service\Gemotest\Type;

class Contingent
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $value;

    public function getCode()
    {
        return $this->code;
    }

    public function withCode($code)
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function withValue($value)
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }
}


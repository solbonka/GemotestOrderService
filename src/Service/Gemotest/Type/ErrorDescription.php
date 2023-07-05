<?php

namespace App\Service\Gemotest\Type;

class ErrorDescription
{
    /**
     * @var int
     */
    private $error_code;

    /**
     * @var string
     */
    private $error_description;

    public function getError_code()
    {
        return $this->error_code;
    }

    public function withError_code($error_code)
    {
        $new = clone $this;
        $new->error_code = $error_code;

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
}


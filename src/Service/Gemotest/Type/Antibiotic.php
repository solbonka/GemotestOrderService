<?php

namespace App\Service\Gemotest\Type;

class Antibiotic
{
    /**
     * @var string
     */
    private $microbe_name;

    /**
     * @var string
     */
    private $antibiotic_name;

    /**
     * @var string
     */
    private $antibiotic_code;

    /**
     * @var string
     */
    private $resistance_value;

    public function getMicrobe_name()
    {
        return $this->microbe_name;
    }

    public function withMicrobe_name($microbe_name)
    {
        $new = clone $this;
        $new->microbe_name = $microbe_name;

        return $new;
    }

    public function getAntibiotic_name()
    {
        return $this->antibiotic_name;
    }

    public function withAntibiotic_name($antibiotic_name)
    {
        $new = clone $this;
        $new->antibiotic_name = $antibiotic_name;

        return $new;
    }

    public function getAntibiotic_code()
    {
        return $this->antibiotic_code;
    }

    public function withAntibiotic_code($antibiotic_code)
    {
        $new = clone $this;
        $new->antibiotic_code = $antibiotic_code;

        return $new;
    }

    public function getResistance_value()
    {
        return $this->resistance_value;
    }

    public function withResistance_value($resistance_value)
    {
        $new = clone $this;
        $new->resistance_value = $resistance_value;

        return $new;
    }
}


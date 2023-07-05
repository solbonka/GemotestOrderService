<?php

namespace App\Service\Gemotest\Type;

class Microbe
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $norma;

    public function getId()
    {
        return $this->id;
    }

    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

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

    public function getNorma()
    {
        return $this->norma;
    }

    public function withNorma($norma)
    {
        $new = clone $this;
        $new->norma = $norma;

        return $new;
    }
}


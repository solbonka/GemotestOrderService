<?php

namespace App\Service\Gemotest\Type;

class Supplemental
{
    /**
     * @var string
     */
    private $parent_id;

    /**
     * @var string
     */
    private $test_id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * @var bool
     */
    private $required;

    public function getParent_id()
    {
        return $this->parent_id;
    }

    public function withParent_id($parent_id)
    {
        $new = clone $this;
        $new->parent_id = $parent_id;

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

    public function getName()
    {
        return $this->name;
    }

    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

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

    public function getRequired()
    {
        return $this->required;
    }

    public function withRequired($required)
    {
        $new = clone $this;
        $new->required = $required;

        return $new;
    }
}


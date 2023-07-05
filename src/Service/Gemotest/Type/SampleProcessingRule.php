<?php

namespace App\Service\Gemotest\Type;

class SampleProcessingRule
{
    /**
     * @var int
     */
    private $rule_id;

    /**
     * @var string
     */
    private $rule_name;

    /**
     * @var string
     */
    private $parameter_name;

    /**
     * @var string
     */
    private $parameter_description;

    /**
     * @var string
     */
    private $parameter_type_name;

    /**
     * @var string
     */
    private $parameter_type_title;

    /**
     * @var string
     */
    private $section_name;

    /**
     * @var string
     */
    private $section_title;

    public function getRule_id()
    {
        return $this->rule_id;
    }

    public function withRule_id($rule_id)
    {
        $new = clone $this;
        $new->rule_id = $rule_id;

        return $new;
    }

    public function getRule_name()
    {
        return $this->rule_name;
    }

    public function withRule_name($rule_name)
    {
        $new = clone $this;
        $new->rule_name = $rule_name;

        return $new;
    }

    public function getParameter_name()
    {
        return $this->parameter_name;
    }

    public function withParameter_name($parameter_name)
    {
        $new = clone $this;
        $new->parameter_name = $parameter_name;

        return $new;
    }

    public function getParameter_description()
    {
        return $this->parameter_description;
    }

    public function withParameter_description($parameter_description)
    {
        $new = clone $this;
        $new->parameter_description = $parameter_description;

        return $new;
    }

    public function getParameter_type_name()
    {
        return $this->parameter_type_name;
    }

    public function withParameter_type_name($parameter_type_name)
    {
        $new = clone $this;
        $new->parameter_type_name = $parameter_type_name;

        return $new;
    }

    public function getParameter_type_title()
    {
        return $this->parameter_type_title;
    }

    public function withParameter_type_title($parameter_type_title)
    {
        $new = clone $this;
        $new->parameter_type_title = $parameter_type_title;

        return $new;
    }

    public function getSection_name()
    {
        return $this->section_name;
    }

    public function withSection_name($section_name)
    {
        $new = clone $this;
        $new->section_name = $section_name;

        return $new;
    }

    public function getSection_title()
    {
        return $this->section_title;
    }

    public function withSection_title($section_title)
    {
        $new = clone $this;
        $new->section_title = $section_title;

        return $new;
    }
}


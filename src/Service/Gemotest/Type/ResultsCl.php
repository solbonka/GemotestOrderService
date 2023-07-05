<?php

namespace App\Service\Gemotest\Type;

class ResultsCl
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $test_rusname;

    /**
     * @var string
     */
    private $section_name;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $measurement_unit;

    /**
     * @var string
     */
    private $ref_min;

    /**
     * @var string
     */
    private $ref_max;

    /**
     * @var string
     */
    private $ref_range;

    /**
     * @var string
     */
    private $ref_text;

    /**
     * @var int
     */
    private $status_cl;

    /**
     * @var \DateTimeInterface
     */
    private $result_date;

    /**
     * @var int
     */
    private $test_system_code;

    /**
     * @var string
     */
    private $test_system_name;

    /**
     * @var \DateTimeInterface
     */
    private $test_system_date;

    /**
     * @var int
     */
    private $test_system_series;

    /**
     * @var string
     */
    private $service_id;

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

    public function getTest_rusname()
    {
        return $this->test_rusname;
    }

    public function withTest_rusname($test_rusname)
    {
        $new = clone $this;
        $new->test_rusname = $test_rusname;

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

    public function getMeasurement_unit()
    {
        return $this->measurement_unit;
    }

    public function withMeasurement_unit($measurement_unit)
    {
        $new = clone $this;
        $new->measurement_unit = $measurement_unit;

        return $new;
    }

    public function getRef_min()
    {
        return $this->ref_min;
    }

    public function withRef_min($ref_min)
    {
        $new = clone $this;
        $new->ref_min = $ref_min;

        return $new;
    }

    public function getRef_max()
    {
        return $this->ref_max;
    }

    public function withRef_max($ref_max)
    {
        $new = clone $this;
        $new->ref_max = $ref_max;

        return $new;
    }

    public function getRef_range()
    {
        return $this->ref_range;
    }

    public function withRef_range($ref_range)
    {
        $new = clone $this;
        $new->ref_range = $ref_range;

        return $new;
    }

    public function getRef_text()
    {
        return $this->ref_text;
    }

    public function withRef_text($ref_text)
    {
        $new = clone $this;
        $new->ref_text = $ref_text;

        return $new;
    }

    public function getStatus_cl()
    {
        return $this->status_cl;
    }

    public function withStatus_cl($status_cl)
    {
        $new = clone $this;
        $new->status_cl = $status_cl;

        return $new;
    }

    public function getResult_date()
    {
        return $this->result_date;
    }

    public function withResult_date($result_date)
    {
        $new = clone $this;
        $new->result_date = $result_date;

        return $new;
    }

    public function getTest_system_code()
    {
        return $this->test_system_code;
    }

    public function withTest_system_code($test_system_code)
    {
        $new = clone $this;
        $new->test_system_code = $test_system_code;

        return $new;
    }

    public function getTest_system_name()
    {
        return $this->test_system_name;
    }

    public function withTest_system_name($test_system_name)
    {
        $new = clone $this;
        $new->test_system_name = $test_system_name;

        return $new;
    }

    public function getTest_system_date()
    {
        return $this->test_system_date;
    }

    public function withTest_system_date($test_system_date)
    {
        $new = clone $this;
        $new->test_system_date = $test_system_date;

        return $new;
    }

    public function getTest_system_series()
    {
        return $this->test_system_series;
    }

    public function withTest_system_series($test_system_series)
    {
        $new = clone $this;
        $new->test_system_series = $test_system_series;

        return $new;
    }

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
}


<?php

namespace App\Service\Gemotest\Type;

class SampleV2
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $utilize;

    /**
     * @var int
     */
    private $priority;

    /**
     * @var string
     */
    private $transport_id;

    /**
     * @var string
     */
    private $sample_processing_rule_id;

    /**
     * @var string
     */
    private $utilization_type;

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

    public function getUtilize()
    {
        return $this->utilize;
    }

    public function withUtilize($utilize)
    {
        $new = clone $this;
        $new->utilize = $utilize;

        return $new;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function withPriority($priority)
    {
        $new = clone $this;
        $new->priority = $priority;

        return $new;
    }

    public function getTransport_id()
    {
        return $this->transport_id;
    }

    public function withTransport_id($transport_id)
    {
        $new = clone $this;
        $new->transport_id = $transport_id;

        return $new;
    }

    public function getSample_processing_rule_id()
    {
        return $this->sample_processing_rule_id;
    }

    public function withSample_processing_rule_id($sample_processing_rule_id)
    {
        $new = clone $this;
        $new->sample_processing_rule_id = $sample_processing_rule_id;

        return $new;
    }

    public function getUtilization_type()
    {
        return $this->utilization_type;
    }

    public function withUtilization_type($utilization_type)
    {
        $new = clone $this;
        $new->utilization_type = $utilization_type;

        return $new;
    }
}


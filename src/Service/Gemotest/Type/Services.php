<?php

namespace App\Service\Gemotest\Type;

class Services
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $service_type;

    /**
     * @var string
     */
    private $biomaterial_id;

    /**
     * @var string
     */
    private $other_biomaterial;

    /**
     * @var string
     */
    private $localization_id;

    /**
     * @var string
     */
    private $other_localization;

    /**
     * @var string
     */
    private $transport_id;

    /**
     * @var bool
     */
    private $probe_in_work;

    /**
     * @var \App\Service\Gemotest\Type\AdditionalTests
     */
    private $additional_tests;

    /**
     * @var int
     */
    private $age_lock_from;

    /**
     * @var int
     */
    private $age_lock_to;

    /**
     * @var int
     */
    private $pregnancy_week_lock_from;

    /**
     * @var int
     */
    private $pregnancy_week_lock_to;

    /**
     * @var int
     */
    private $allowed_for_gender;

    /**
     * @var string
     */
    private $group_id;

    /**
     * @var float
     */
    private $price;

    /**
     * @var int
     */
    private $execution_period;

    /**
     * @var bool
     */
    private $is_blocked;

    /**
     * @var int
     */
    private $increase_period;

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

    public function getType()
    {
        return $this->type;
    }

    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    public function getService_type()
    {
        return $this->service_type;
    }

    public function withService_type($service_type)
    {
        $new = clone $this;
        $new->service_type = $service_type;

        return $new;
    }

    public function getBiomaterial_id()
    {
        return $this->biomaterial_id;
    }

    public function withBiomaterial_id($biomaterial_id)
    {
        $new = clone $this;
        $new->biomaterial_id = $biomaterial_id;

        return $new;
    }

    public function getOther_biomaterial()
    {
        return $this->other_biomaterial;
    }

    public function withOther_biomaterial($other_biomaterial)
    {
        $new = clone $this;
        $new->other_biomaterial = $other_biomaterial;

        return $new;
    }

    public function getLocalization_id()
    {
        return $this->localization_id;
    }

    public function withLocalization_id($localization_id)
    {
        $new = clone $this;
        $new->localization_id = $localization_id;

        return $new;
    }

    public function getOther_localization()
    {
        return $this->other_localization;
    }

    public function withOther_localization($other_localization)
    {
        $new = clone $this;
        $new->other_localization = $other_localization;

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

    public function getProbe_in_work()
    {
        return $this->probe_in_work;
    }

    public function withProbe_in_work($probe_in_work)
    {
        $new = clone $this;
        $new->probe_in_work = $probe_in_work;

        return $new;
    }

    public function getAdditional_tests()
    {
        return $this->additional_tests;
    }

    public function withAdditional_tests($additional_tests)
    {
        $new = clone $this;
        $new->additional_tests = $additional_tests;

        return $new;
    }

    public function getAge_lock_from()
    {
        return $this->age_lock_from;
    }

    public function withAge_lock_from($age_lock_from)
    {
        $new = clone $this;
        $new->age_lock_from = $age_lock_from;

        return $new;
    }

    public function getAge_lock_to()
    {
        return $this->age_lock_to;
    }

    public function withAge_lock_to($age_lock_to)
    {
        $new = clone $this;
        $new->age_lock_to = $age_lock_to;

        return $new;
    }

    public function getPregnancy_week_lock_from()
    {
        return $this->pregnancy_week_lock_from;
    }

    public function withPregnancy_week_lock_from($pregnancy_week_lock_from)
    {
        $new = clone $this;
        $new->pregnancy_week_lock_from = $pregnancy_week_lock_from;

        return $new;
    }

    public function getPregnancy_week_lock_to()
    {
        return $this->pregnancy_week_lock_to;
    }

    public function withPregnancy_week_lock_to($pregnancy_week_lock_to)
    {
        $new = clone $this;
        $new->pregnancy_week_lock_to = $pregnancy_week_lock_to;

        return $new;
    }

    public function getAllowed_for_gender()
    {
        return $this->allowed_for_gender;
    }

    public function withAllowed_for_gender($allowed_for_gender)
    {
        $new = clone $this;
        $new->allowed_for_gender = $allowed_for_gender;

        return $new;
    }

    public function getGroup_id()
    {
        return $this->group_id;
    }

    public function withGroup_id($group_id)
    {
        $new = clone $this;
        $new->group_id = $group_id;

        return $new;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function withPrice($price)
    {
        $new = clone $this;
        $new->price = $price;

        return $new;
    }

    public function getExecution_period()
    {
        return $this->execution_period;
    }

    public function withExecution_period($execution_period)
    {
        $new = clone $this;
        $new->execution_period = $execution_period;

        return $new;
    }

    public function getIs_blocked()
    {
        return $this->is_blocked;
    }

    public function withIs_blocked($is_blocked)
    {
        $new = clone $this;
        $new->is_blocked = $is_blocked;

        return $new;
    }

    public function getIncrease_period()
    {
        return $this->increase_period;
    }

    public function withIncrease_period($increase_period)
    {
        $new = clone $this;
        $new->increase_period = $increase_period;

        return $new;
    }
}


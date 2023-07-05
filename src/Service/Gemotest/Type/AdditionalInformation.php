<?php

namespace App\Service\Gemotest\Type;

class AdditionalInformation
{
    /**
     * @var int
     */
    private $pregnant_week;

    /**
     * @var int
     */
    private $cycle_day;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $actual_address;

    /**
     * @var string
     */
    private $representative_actual_address;

    /**
     * @var string
     */
    private $representative_region;

    /**
     * @var string
     */
    private $passport;

    /**
     * @var \DateTimeInterface
     */
    private $passport_issued;

    /**
     * @var string
     */
    private $passport_issued_by;

    /**
     * @var string
     */
    private $snils;

    /**
     * @var string
     */
    private $oms;

    /**
     * @var string
     */
    private $dms;

    /**
     * @var string
     */
    private $dmc_companyname;

    /**
     * @var string
     */
    private $working_address;

    /**
     * @var bool
     */
    private $flag_travel_14_days;

    /**
     * @var bool
     */
    private $flag_travel_30_days;

    /**
     * @var string
     */
    private $travel_country;

    /**
     * @var \DateTimeInterface
     */
    private $return_date;

    /**
     * @var \DateTimeInterface
     */
    private $illness_date;

    /**
     * @var \DateTimeInterface
     */
    private $contact_clinic_date;

    /**
     * @var \DateTimeInterface
     */
    private $biomaterial_taking_datetime;

    /**
     * @var \DateTimeInterface
     */
    private $biomaterial_shipping_datetime;

    /**
     * @var string
     */
    private $diagnosis;

    /**
     * @var string
     */
    private $diagnosis_mkb;

    /**
     * @var string
     */
    private $birth_certificate;

    /**
     * @var \DateTimeInterface
     */
    private $birth_certificate_issue_date;

    /**
     * @var string
     */
    private $birth_certificate_issue_by;

    /**
     * @var string
     */
    private $country_code;

    public function getPregnant_week()
    {
        return $this->pregnant_week;
    }

    public function withPregnant_week($pregnant_week)
    {
        $new = clone $this;
        $new->pregnant_week = $pregnant_week;

        return $new;
    }

    public function getCycle_day()
    {
        return $this->cycle_day;
    }

    public function withCycle_day($cycle_day)
    {
        $new = clone $this;
        $new->cycle_day = $cycle_day;

        return $new;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function withRegion($region)
    {
        $new = clone $this;
        $new->region = $region;

        return $new;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function withCity($city)
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    public function getActual_address()
    {
        return $this->actual_address;
    }

    public function withActual_address($actual_address)
    {
        $new = clone $this;
        $new->actual_address = $actual_address;

        return $new;
    }

    public function getRepresentative_actual_address()
    {
        return $this->representative_actual_address;
    }

    public function withRepresentative_actual_address($representative_actual_address)
    {
        $new = clone $this;
        $new->representative_actual_address = $representative_actual_address;

        return $new;
    }

    public function getRepresentative_region()
    {
        return $this->representative_region;
    }

    public function withRepresentative_region($representative_region)
    {
        $new = clone $this;
        $new->representative_region = $representative_region;

        return $new;
    }

    public function getPassport()
    {
        return $this->passport;
    }

    public function withPassport($passport)
    {
        $new = clone $this;
        $new->passport = $passport;

        return $new;
    }

    public function getPassport_issued()
    {
        return $this->passport_issued;
    }

    public function withPassport_issued($passport_issued)
    {
        $new = clone $this;
        $new->passport_issued = $passport_issued;

        return $new;
    }

    public function getPassport_issued_by()
    {
        return $this->passport_issued_by;
    }

    public function withPassport_issued_by($passport_issued_by)
    {
        $new = clone $this;
        $new->passport_issued_by = $passport_issued_by;

        return $new;
    }

    public function getSnils()
    {
        return $this->snils;
    }

    public function withSnils($snils)
    {
        $new = clone $this;
        $new->snils = $snils;

        return $new;
    }

    public function getOms()
    {
        return $this->oms;
    }

    public function withOms($oms)
    {
        $new = clone $this;
        $new->oms = $oms;

        return $new;
    }

    public function getDms()
    {
        return $this->dms;
    }

    public function withDms($dms)
    {
        $new = clone $this;
        $new->dms = $dms;

        return $new;
    }

    public function getDmc_companyname()
    {
        return $this->dmc_companyname;
    }

    public function withDmc_companyname($dmc_companyname)
    {
        $new = clone $this;
        $new->dmc_companyname = $dmc_companyname;

        return $new;
    }

    public function getWorking_address()
    {
        return $this->working_address;
    }

    public function withWorking_address($working_address)
    {
        $new = clone $this;
        $new->working_address = $working_address;

        return $new;
    }

    public function getFlag_travel_14_days()
    {
        return $this->flag_travel_14_days;
    }

    public function withFlag_travel_14_days($flag_travel_14_days)
    {
        $new = clone $this;
        $new->flag_travel_14_days = $flag_travel_14_days;

        return $new;
    }

    public function getFlag_travel_30_days()
    {
        return $this->flag_travel_30_days;
    }

    public function withFlag_travel_30_days($flag_travel_30_days)
    {
        $new = clone $this;
        $new->flag_travel_30_days = $flag_travel_30_days;

        return $new;
    }

    public function getTravel_country()
    {
        return $this->travel_country;
    }

    public function withTravel_country($travel_country)
    {
        $new = clone $this;
        $new->travel_country = $travel_country;

        return $new;
    }

    public function getReturn_date()
    {
        return $this->return_date;
    }

    public function withReturn_date($return_date)
    {
        $new = clone $this;
        $new->return_date = $return_date;

        return $new;
    }

    public function getIllness_date()
    {
        return $this->illness_date;
    }

    public function withIllness_date($illness_date)
    {
        $new = clone $this;
        $new->illness_date = $illness_date;

        return $new;
    }

    public function getContact_clinic_date()
    {
        return $this->contact_clinic_date;
    }

    public function withContact_clinic_date($contact_clinic_date)
    {
        $new = clone $this;
        $new->contact_clinic_date = $contact_clinic_date;

        return $new;
    }

    public function getBiomaterial_taking_datetime()
    {
        return $this->biomaterial_taking_datetime;
    }

    public function withBiomaterial_taking_datetime($biomaterial_taking_datetime)
    {
        $new = clone $this;
        $new->biomaterial_taking_datetime = $biomaterial_taking_datetime;

        return $new;
    }

    public function getBiomaterial_shipping_datetime()
    {
        return $this->biomaterial_shipping_datetime;
    }

    public function withBiomaterial_shipping_datetime($biomaterial_shipping_datetime)
    {
        $new = clone $this;
        $new->biomaterial_shipping_datetime = $biomaterial_shipping_datetime;

        return $new;
    }

    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    public function withDiagnosis($diagnosis)
    {
        $new = clone $this;
        $new->diagnosis = $diagnosis;

        return $new;
    }

    public function getDiagnosis_mkb()
    {
        return $this->diagnosis_mkb;
    }

    public function withDiagnosis_mkb($diagnosis_mkb)
    {
        $new = clone $this;
        $new->diagnosis_mkb = $diagnosis_mkb;

        return $new;
    }

    public function getBirth_certificate()
    {
        return $this->birth_certificate;
    }

    public function withBirth_certificate($birth_certificate)
    {
        $new = clone $this;
        $new->birth_certificate = $birth_certificate;

        return $new;
    }

    public function getBirth_certificate_issue_date()
    {
        return $this->birth_certificate_issue_date;
    }

    public function withBirth_certificate_issue_date($birth_certificate_issue_date)
    {
        $new = clone $this;
        $new->birth_certificate_issue_date = $birth_certificate_issue_date;

        return $new;
    }

    public function getBirth_certificate_issue_by()
    {
        return $this->birth_certificate_issue_by;
    }

    public function withBirth_certificate_issue_by($birth_certificate_issue_by)
    {
        $new = clone $this;
        $new->birth_certificate_issue_by = $birth_certificate_issue_by;

        return $new;
    }

    public function getCountry_code()
    {
        return $this->country_code;
    }

    public function withCountry_code($country_code)
    {
        $new = clone $this;
        $new->country_code = $country_code;

        return $new;
    }
}


<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Order implements RequestInterface
{
    /**
     * @var string
     */
    private $ext_num;

    /**
     * @var string
     */
    private $order_num;

    /**
     * @var string
     */
    private $doctor;

    /**
     * @var string
     */
    private $contractor;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var bool
     */
    private $registered;

    /**
     * @var \DateTimeInterface
     */
    private $registration_date;

    /**
     * @var int
     */
    private $order_status;

    /**
     * @var int
     */
    private $result_status;

    /**
     * @var \App\Service\Gemotest\Type\Patient
     */
    private $patient;

    /**
     * @var \App\Service\Gemotest\Type\Representative
     */
    private $representative;

    /**
     * @var \App\Service\Gemotest\Type\Informing
     */
    private $informing;

    /**
     * @var \App\Service\Gemotest\Type\AdditionalInformation
     */
    private $additional_information;

    /**
     * @var \App\Service\Gemotest\Type\Services
     */
    private $services;

    /**
     * @var \App\Service\Gemotest\Type\OrderSample
     */
    private $order_samples;

    /**
     * @var \App\Service\Gemotest\Type\ServicesSupplementals
     */
    private $services_supplementals;

    /**
     * @var int
     */
    private $user_id;

    /**
     * @var bool
     */
    private $read_only;

    /**
     * @var bool
     */
    private $guarantee_letter;

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
     * @var bool
     */
    private $covid_vaccination_flag;

    /**
     * @var string
     */
    private $covid_vaccine_name;

    /**
     * @var \DateTimeInterface
     */
    private $covid_first_vaccination_date;

    /**
     * @var \DateTimeInterface
     */
    private $covid_second_vaccination_date;

    /**
     * @var bool
     */
    private $flu_vaccination_flag;

    /**
     * @var string
     */
    private $flu_vaccine_name;

    /**
     * @var \DateTimeInterface
     */
    private $flu_vaccination_date;

    /**
     * @var string
     */
    private $country_code;

    /**
     * @var string
     */
    private $international_passport_last_name;

    /**
     * @var string
     */
    private $international_passport_name;

    /**
     * @var string
     */
    private $international_passport_number;

    /**
     * @var \DateTimeInterface
     */
    private $international_passport_issue_date;

    /**
     * @var string
     */
    private $international_passport_issued_by;

    public function __construct($ext_num, $order_num, $doctor, $contractor, $hash, $comment, $registered, $registration_date, $order_status, $result_status, $patient, $representative, $informing, $additional_information, $services, $order_samples, $services_supplementals, $user_id, $read_only, $guarantee_letter, $flag_travel_30_days, $travel_country, $return_date, $covid_vaccination_flag, $covid_vaccine_name, $covid_first_vaccination_date, $covid_second_vaccination_date, $flu_vaccination_flag, $flu_vaccine_name, $flu_vaccination_date, $country_code, $international_passport_last_name, $international_passport_name, $international_passport_number, $international_passport_issue_date, $international_passport_issued_by)
    {
        $this->ext_num = $ext_num;
        $this->order_num = $order_num;
        $this->doctor = $doctor;
        $this->contractor = $contractor;
        $this->hash = $hash;
        $this->comment = $comment;
        $this->registered = $registered;
        $this->registration_date = $registration_date;
        $this->order_status = $order_status;
        $this->result_status = $result_status;
        $this->patient = $patient;
        $this->representative = $representative;
        $this->informing = $informing;
        $this->additional_information = $additional_information;
        $this->services = $services;
        $this->order_samples = $order_samples;
        $this->services_supplementals = $services_supplementals;
        $this->user_id = $user_id;
        $this->read_only = $read_only;
        $this->guarantee_letter = $guarantee_letter;
        $this->flag_travel_30_days = $flag_travel_30_days;
        $this->travel_country = $travel_country;
        $this->return_date = $return_date;
        $this->covid_vaccination_flag = $covid_vaccination_flag;
        $this->covid_vaccine_name = $covid_vaccine_name;
        $this->covid_first_vaccination_date = $covid_first_vaccination_date;
        $this->covid_second_vaccination_date = $covid_second_vaccination_date;
        $this->flu_vaccination_flag = $flu_vaccination_flag;
        $this->flu_vaccine_name = $flu_vaccine_name;
        $this->flu_vaccination_date = $flu_vaccination_date;
        $this->country_code = $country_code;
        $this->international_passport_last_name = $international_passport_last_name;
        $this->international_passport_name = $international_passport_name;
        $this->international_passport_number = $international_passport_number;
        $this->international_passport_issue_date = $international_passport_issue_date;
        $this->international_passport_issued_by = $international_passport_issued_by;
    }

    public function getExt_num()
    {
        return $this->ext_num;
    }

    public function withExt_num($ext_num)
    {
        $new = clone $this;
        $new->ext_num = $ext_num;

        return $new;
    }

    public function getOrder_num()
    {
        return $this->order_num;
    }

    public function withOrder_num($order_num)
    {
        $new = clone $this;
        $new->order_num = $order_num;

        return $new;
    }

    public function getDoctor()
    {
        return $this->doctor;
    }

    public function withDoctor($doctor)
    {
        $new = clone $this;
        $new->doctor = $doctor;

        return $new;
    }

    public function getContractor()
    {
        return $this->contractor;
    }

    public function withContractor($contractor)
    {
        $new = clone $this;
        $new->contractor = $contractor;

        return $new;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function withHash($hash)
    {
        $new = clone $this;
        $new->hash = $hash;

        return $new;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function withComment($comment)
    {
        $new = clone $this;
        $new->comment = $comment;

        return $new;
    }

    public function getRegistered()
    {
        return $this->registered;
    }

    public function withRegistered($registered)
    {
        $new = clone $this;
        $new->registered = $registered;

        return $new;
    }

    public function getRegistration_date()
    {
        return $this->registration_date;
    }

    public function withRegistration_date($registration_date)
    {
        $new = clone $this;
        $new->registration_date = $registration_date;

        return $new;
    }

    public function getOrder_status()
    {
        return $this->order_status;
    }

    public function withOrder_status($order_status)
    {
        $new = clone $this;
        $new->order_status = $order_status;

        return $new;
    }

    public function getResult_status()
    {
        return $this->result_status;
    }

    public function withResult_status($result_status)
    {
        $new = clone $this;
        $new->result_status = $result_status;

        return $new;
    }

    public function getPatient()
    {
        return $this->patient;
    }

    public function withPatient($patient)
    {
        $new = clone $this;
        $new->patient = $patient;

        return $new;
    }

    public function getRepresentative()
    {
        return $this->representative;
    }

    public function withRepresentative($representative)
    {
        $new = clone $this;
        $new->representative = $representative;

        return $new;
    }

    public function getInforming()
    {
        return $this->informing;
    }

    public function withInforming($informing)
    {
        $new = clone $this;
        $new->informing = $informing;

        return $new;
    }

    public function getAdditional_information()
    {
        return $this->additional_information;
    }

    public function withAdditional_information($additional_information)
    {
        $new = clone $this;
        $new->additional_information = $additional_information;

        return $new;
    }

    public function getServices()
    {
        return $this->services;
    }

    public function withServices($services)
    {
        $new = clone $this;
        $new->services = $services;

        return $new;
    }

    public function getOrder_samples()
    {
        return $this->order_samples;
    }

    public function withOrder_samples($order_samples)
    {
        $new = clone $this;
        $new->order_samples = $order_samples;

        return $new;
    }

    public function getServices_supplementals()
    {
        return $this->services_supplementals;
    }

    public function withServices_supplementals($services_supplementals)
    {
        $new = clone $this;
        $new->services_supplementals = $services_supplementals;

        return $new;
    }

    public function getUser_id()
    {
        return $this->user_id;
    }

    public function withUser_id($user_id)
    {
        $new = clone $this;
        $new->user_id = $user_id;

        return $new;
    }

    public function getRead_only()
    {
        return $this->read_only;
    }

    public function withRead_only($read_only)
    {
        $new = clone $this;
        $new->read_only = $read_only;

        return $new;
    }

    public function getGuarantee_letter()
    {
        return $this->guarantee_letter;
    }

    public function withGuarantee_letter($guarantee_letter)
    {
        $new = clone $this;
        $new->guarantee_letter = $guarantee_letter;

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

    public function getCovid_vaccination_flag()
    {
        return $this->covid_vaccination_flag;
    }

    public function withCovid_vaccination_flag($covid_vaccination_flag)
    {
        $new = clone $this;
        $new->covid_vaccination_flag = $covid_vaccination_flag;

        return $new;
    }

    public function getCovid_vaccine_name()
    {
        return $this->covid_vaccine_name;
    }

    public function withCovid_vaccine_name($covid_vaccine_name)
    {
        $new = clone $this;
        $new->covid_vaccine_name = $covid_vaccine_name;

        return $new;
    }

    public function getCovid_first_vaccination_date()
    {
        return $this->covid_first_vaccination_date;
    }

    public function withCovid_first_vaccination_date($covid_first_vaccination_date)
    {
        $new = clone $this;
        $new->covid_first_vaccination_date = $covid_first_vaccination_date;

        return $new;
    }

    public function getCovid_second_vaccination_date()
    {
        return $this->covid_second_vaccination_date;
    }

    public function withCovid_second_vaccination_date($covid_second_vaccination_date)
    {
        $new = clone $this;
        $new->covid_second_vaccination_date = $covid_second_vaccination_date;

        return $new;
    }

    public function getFlu_vaccination_flag()
    {
        return $this->flu_vaccination_flag;
    }

    public function withFlu_vaccination_flag($flu_vaccination_flag)
    {
        $new = clone $this;
        $new->flu_vaccination_flag = $flu_vaccination_flag;

        return $new;
    }

    public function getFlu_vaccine_name()
    {
        return $this->flu_vaccine_name;
    }

    public function withFlu_vaccine_name($flu_vaccine_name)
    {
        $new = clone $this;
        $new->flu_vaccine_name = $flu_vaccine_name;

        return $new;
    }

    public function getFlu_vaccination_date()
    {
        return $this->flu_vaccination_date;
    }

    public function withFlu_vaccination_date($flu_vaccination_date)
    {
        $new = clone $this;
        $new->flu_vaccination_date = $flu_vaccination_date;

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

    public function getInternational_passport_last_name()
    {
        return $this->international_passport_last_name;
    }

    public function withInternational_passport_last_name($international_passport_last_name)
    {
        $new = clone $this;
        $new->international_passport_last_name = $international_passport_last_name;

        return $new;
    }

    public function getInternational_passport_name()
    {
        return $this->international_passport_name;
    }

    public function withInternational_passport_name($international_passport_name)
    {
        $new = clone $this;
        $new->international_passport_name = $international_passport_name;

        return $new;
    }

    public function getInternational_passport_number()
    {
        return $this->international_passport_number;
    }

    public function withInternational_passport_number($international_passport_number)
    {
        $new = clone $this;
        $new->international_passport_number = $international_passport_number;

        return $new;
    }

    public function getInternational_passport_issue_date()
    {
        return $this->international_passport_issue_date;
    }

    public function withInternational_passport_issue_date($international_passport_issue_date)
    {
        $new = clone $this;
        $new->international_passport_issue_date = $international_passport_issue_date;

        return $new;
    }

    public function getInternational_passport_issued_by()
    {
        return $this->international_passport_issued_by;
    }

    public function withInternational_passport_issued_by($international_passport_issued_by)
    {
        $new = clone $this;
        $new->international_passport_issued_by = $international_passport_issued_by;

        return $new;
    }
}


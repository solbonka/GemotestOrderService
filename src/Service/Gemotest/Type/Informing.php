<?php

namespace App\Service\Gemotest\Type;

class Informing
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $mobile_phone;

    /**
     * @var string
     */
    private $home_phone;

    /**
     * @var bool
     */
    private $flag_sms_notifications;

    public function getEmail()
    {
        return $this->email;
    }

    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    public function getMobile_phone()
    {
        return $this->mobile_phone;
    }

    public function withMobile_phone($mobile_phone)
    {
        $new = clone $this;
        $new->mobile_phone = $mobile_phone;

        return $new;
    }

    public function getHome_phone()
    {
        return $this->home_phone;
    }

    public function withHome_phone($home_phone)
    {
        $new = clone $this;
        $new->home_phone = $home_phone;

        return $new;
    }

    public function getFlag_sms_notifications()
    {
        return $this->flag_sms_notifications;
    }

    public function withFlag_sms_notifications($flag_sms_notifications)
    {
        $new = clone $this;
        $new->flag_sms_notifications = $flag_sms_notifications;

        return $new;
    }
}


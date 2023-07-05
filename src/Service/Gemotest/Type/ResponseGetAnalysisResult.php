<?php

namespace App\Service\Gemotest\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ResponseGetAnalysisResult implements ResultInterface
{
    /**
     * @var \App\Service\Gemotest\Type\ErrorDescription
     */
    private $error_description;

    /**
     * @var string
     */
    private $ext_num;

    /**
     * @var string
     */
    private $order_num;

    /**
     * @var \DateTimeInterface
     */
    private $date;

    /**
     * @var string
     */
    private $doctor;

    /**
     * @var \App\Service\Gemotest\Type\ResultsCl
     */
    private $results_cl;

    /**
     * @var \App\Service\Gemotest\Type\ResultsMb
     */
    private $results_mb;

    /**
     * @var \App\Service\Gemotest\Type\Attachments
     */
    private $attachments;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var int
     */
    private $status;

    public function getError_description()
    {
        return $this->error_description;
    }

    public function withError_description($error_description)
    {
        $new = clone $this;
        $new->error_description = $error_description;

        return $new;
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

    public function getDate()
    {
        return $this->date;
    }

    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

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

    public function getResults_cl()
    {
        return $this->results_cl;
    }

    public function withResults_cl($results_cl)
    {
        $new = clone $this;
        $new->results_cl = $results_cl;

        return $new;
    }

    public function getResults_mb()
    {
        return $this->results_mb;
    }

    public function withResults_mb($results_mb)
    {
        $new = clone $this;
        $new->results_mb = $results_mb;

        return $new;
    }

    public function getAttachments()
    {
        return $this->attachments;
    }

    public function withAttachments($attachments)
    {
        $new = clone $this;
        $new->attachments = $attachments;

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

    public function getStatus()
    {
        return $this->status;
    }

    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }
}


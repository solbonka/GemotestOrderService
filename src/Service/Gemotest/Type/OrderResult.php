<?php

namespace App\Service\Gemotest\Type;

class OrderResult
{
    /**
     * @var string
     */
    private $order_num;

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
}


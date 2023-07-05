<?php

namespace App\Service\Gemotest\Type;

class GetServicesAllInterlocks
{
    /**
     * @var string
     */
    private $serv_id;

    /**
     * @var string
     */
    private $blocked_serv;

    public function getServ_id()
    {
        return $this->serv_id;
    }

    public function withServ_id($serv_id)
    {
        $new = clone $this;
        $new->serv_id = $serv_id;

        return $new;
    }

    public function getBlocked_serv()
    {
        return $this->blocked_serv;
    }

    public function withBlocked_serv($blocked_serv)
    {
        $new = clone $this;
        $new->blocked_serv = $blocked_serv;

        return $new;
    }
}


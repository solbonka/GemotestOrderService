<?php

namespace App\Service\Gemotest\Type;

class GetServicesGroupAnalogs
{
    /**
     * @var string
     */
    private $serv_id;

    /**
     * @var string
     */
    private $group_id;

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
}


<?php

namespace App\Service\Gemotest\Type;

class AdditionalTests
{
    /**
     * @var string
     */
    private string $id;

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
}


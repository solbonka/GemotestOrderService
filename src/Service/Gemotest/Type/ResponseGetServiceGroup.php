<?php

namespace App\Service\Gemotest\Type;

class ResponseGetServiceGroup
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $parent_id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $archive;

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

    public function getParent_id()
    {
        return $this->parent_id;
    }

    public function withParent_id($parent_id)
    {
        $new = clone $this;
        $new->parent_id = $parent_id;

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

    public function getArchive()
    {
        return $this->archive;
    }

    public function withArchive($archive)
    {
        $new = clone $this;
        $new->archive = $archive;

        return $new;
    }
}


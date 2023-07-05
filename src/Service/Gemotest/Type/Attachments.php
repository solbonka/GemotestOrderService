<?php

namespace App\Service\Gemotest\Type;

class Attachments
{
    /**
     * @var string
     */
    private $section_name;

    /**
     * @var string
     */
    private $file;

    public function getSection_name()
    {
        return $this->section_name;
    }

    public function withSection_name($section_name)
    {
        $new = clone $this;
        $new->section_name = $section_name;

        return $new;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function withFile($file)
    {
        $new = clone $this;
        $new->file = $file;

        return $new;
    }
}


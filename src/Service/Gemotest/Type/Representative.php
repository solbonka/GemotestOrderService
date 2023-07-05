<?php

namespace App\Service\Gemotest\Type;

class Representative
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $middlename;

    /**
     * @var \DateTimeInterface
     */
    private $birthdate;

    /**
     * @var int
     */
    private $gender;

    /**
     * @var string
     */
    private $snils;

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

    public function getSurname()
    {
        return $this->surname;
    }

    public function withSurname($surname)
    {
        $new = clone $this;
        $new->surname = $surname;

        return $new;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function withFirstname($firstname)
    {
        $new = clone $this;
        $new->firstname = $firstname;

        return $new;
    }

    public function getMiddlename()
    {
        return $this->middlename;
    }

    public function withMiddlename($middlename)
    {
        $new = clone $this;
        $new->middlename = $middlename;

        return $new;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function withBirthdate($birthdate)
    {
        $new = clone $this;
        $new->birthdate = $birthdate;

        return $new;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function withGender($gender)
    {
        $new = clone $this;
        $new->gender = $gender;

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
}


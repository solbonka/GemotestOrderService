<?php

namespace App\Service\Gemotest\Type;

class Patient
{
    /**
     * @var string
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
    private \DateTimeInterface $birthdate;

    /**
     * @var int
     */
    private $gender;

    /**
     * @var bool
     */
    private $anonymous;

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

    public function getAnonymous()
    {
        return $this->anonymous;
    }

    public function withAnonymous($anonymous)
    {
        $new = clone $this;
        $new->anonymous = $anonymous;

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


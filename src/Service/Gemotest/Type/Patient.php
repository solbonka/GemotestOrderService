<?php

namespace App\Service\Gemotest\Type;

use DateTimeInterface;

class Patient
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $surname;

    /**
     * @var string
     */
    private string $firstname;

    /**
     * @var string
     */
    private string $middlename;

    /**
     * @var string
     */
    private string $birthdate;

    /**
     * @var int
     */
    private int $gender;

    /**
     * @var bool
     */
    private bool $anonymous;

    /**
     * @var string
     */
    private string $internationalPassportLastName;

    /**
     * @var string
     */
    private string $internationalPassportName;

    /**
     * @var string
     */
    private string $international_passport_number;

    /**
     * @var string
     */
    private string $internationalPassportIssueDate;

    /**
     * @var string
     */
    private string $internationalPassportIssuedBy;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getMiddlename(): string
    {
        return $this->middlename;
    }

    /**
     * @param string $middlename
     */
    public function setMiddlename(string $middlename): void
    {
        $this->middlename = $middlename;
    }

    /**
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @param string $birthdate
     */
    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = date_format(date_create($birthdate), 'Y-m-d');
    }

    /**
     * @return int
     */
    public function getGender(): int
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     */
    public function setGender(int $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return bool
     */
    public function isAnonymous(): bool
    {
        return $this->anonymous;
    }

    /**
     * @param bool $anonymous
     */
    public function setAnonymous(bool $anonymous): void
    {
        $this->anonymous = $anonymous;
    }

    /**
     * @return string
     */
    public function getInternationalPassportLastName(): string
    {
        return $this->internationalPassportLastName;
    }

    /**
     * @param string $internationalPassportLastName
     */
    public function setInternationalPassportLastName(string $internationalPassportLastName): void
    {
        $this->internationalPassportLastName = $internationalPassportLastName;
    }

    /**
     * @return string
     */
    public function getInternationalPassportName(): string
    {
        return $this->internationalPassportName;
    }

    /**
     * @param string $internationalPassportName
     */
    public function setInternationalPassportName(string $internationalPassportName): void
    {
        $this->internationalPassportName = $internationalPassportName;
    }

    /**
     * @return string
     */
    public function getInternationalPassportNumber(): string
    {
        return $this->international_passport_number;
    }

    /**
     * @param string $international_passport_number
     */
    public function setInternationalPassportNumber(string $international_passport_number): void
    {
        $this->international_passport_number = $international_passport_number;
    }

    /**
     * @return string
     */
    public function getInternationalPassportIssueDate(): string
    {
        return $this->internationalPassportIssueDate;
    }

    /**
     * @param string $internationalPassportIssueDate
     */
    public function setInternationalPassportIssueDate(string $internationalPassportIssueDate): void
    {
        $this->internationalPassportIssueDate = date_format(date_create($internationalPassportIssueDate), 'Y-m-d');
    }

    /**
     * @return string
     */
    public function getInternationalPassportIssuedBy(): string
    {
        return $this->internationalPassportIssuedBy;
    }

    /**
     * @param string $internationalPassportIssuedBy
     */
    public function setInternationalPassportIssuedBy(string $internationalPassportIssuedBy): void
    {
        $this->internationalPassportIssuedBy = $internationalPassportIssuedBy;
    }
    public function toArray(): array
    {
        $newArr = [];
        $array = get_object_vars($this);

        foreach ($array as $key => $value)
        {
            $newArr[strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $key))] = $value;
        }
        return $newArr;
    }
}
<?php

namespace App\Service\Gemotest\Type;

use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;
use stdClass;

class Order implements RequestInterface
{
    /**
     * @var string
     */
    private string $extNum;

    /**
     * @var string
     */
    private string $orderNum;

    /**
     * @var string
     */
    private string $doctor;

    /**
     * @var string
     */
    private string $contractor;

    /**
     * @var string
     */
    private string $hash;

    /**
     * @var string
     */
    private string $comment;

    /**
     * @var bool
     */
    private bool $registered;

    /**
     * @var string
     */
    private string $registrationDate;

    /**
     * @var int
     */
    private int $orderStatus;

    /**
     * @var int
     */
    private int $resultStatus;

    /**
     * @var Patient
     */
    private Patient $patient;

    /**
     * @var array
     */
    private array $services;


    /**
     * @var array
     */
    private array $servicesSupplementals;

    /**
     * @var int
     */
    private int $userId;

    /**
     * @var bool
     */
    private bool $readOnly;

    /**
     * @var bool
     */
    private bool $guaranteeLetter;

    /**
     * @var bool
     */
    private bool $flagTravel30Days;

    /**
     * @var string
     */
    private string $travelCountry;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $returnDate;

    /**
     * @var bool
     */
    private bool $covidVaccinationFlag;

    /**
     * @var string
     */
    private string $covidVaccineName;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $covidFirstVaccinationDate;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $covidSecondVaccinationDate;

    /**
     * @var bool
     */
    private bool $fluVaccinationFlag;

    /**
     * @var string
     */
    private string $fluVaccineName;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $fluVaccinationDate;

    /**
     * @var string
     */
    private string $countryCode;

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
    private string $internationalPassportNumber;

    /**
     * @var DateTimeInterface
     */
    private DateTimeInterface $internationalPassportIssueDate;

    /**
     * @var string
     */
    private string $internationalPassportIssuedBy;

    public function __construct(string $extNum, string $orderNum, string $contractor)
    {
        $this->extNum = $extNum;
        $this->orderNum = $orderNum;
        $this->contractor = $contractor;
    }

    /**
     * @return string
     */
    public function getExtNum(): string
    {
        return $this->extNum;
    }

    /**
     * @param string $extNum
     */
    public function setExtNum(string $extNum): void
    {
        $this->extNum = $extNum;
    }

    /**
     * @return string
     */
    public function getOrderNum(): string
    {
        return $this->orderNum;
    }

    /**
     * @param string $orderNum
     */
    public function setOrderNum(string $orderNum): void
    {
        $this->orderNum = $orderNum;
    }

    /**
     * @return string
     */
    public function getDoctor(): string
    {
        return $this->doctor;
    }

    /**
     * @param string $doctor
     */
    public function setDoctor(string $doctor): void
    {
        $this->doctor = $doctor;
    }

    /**
     * @return string
     */
    public function getContractor(): string
    {
        return $this->contractor;
    }

    /**
     * @param string $contractor
     */
    public function setContractor(string $contractor): void
    {
        $this->contractor = $contractor;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return bool
     */
    public function isRegistered(): bool
    {
        return $this->registered;
    }

    /**
     * @param bool $registered
     */
    public function setRegistered(bool $registered): void
    {
        $this->registered = $registered;
    }

    /**
     * @return string
     */
    public function getRegistrationDate(): string
    {
        return date_format($this->registrationDate, 'Y-m-d');
    }

    /**
     * @param string $registrationDate
     */
    public function setRegistrationDate(string $registrationDate): void
    {
        $this->registrationDate = date_create($registrationDate);
    }

    /**
     * @return int
     */
    public function getOrderStatus(): int
    {
        return $this->orderStatus;
    }

    /**
     * @param int $orderStatus
     */
    public function setOrderStatus(int $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return int
     */
    public function getResultStatus(): int
    {
        return $this->resultStatus;
    }

    /**
     * @param int $resultStatus
     */
    public function setResultStatus(int $resultStatus): void
    {
        $this->resultStatus = $resultStatus;
    }

    /**
     * @return Patient
     */
    public function getPatient(): Patient
    {
        return $this->patient;
    }

    /**
     * @param Patient $patient
     */
    public function setPatient(Patient $patient): void
    {
        $this->patient = $patient;
    }

    /**
     * @return Representative
     */
    public function getRepresentative(): Representative
    {
        return $this->representative;
    }

    /**
     * @param Representative $representative
     */
    public function setRepresentative(Representative $representative): void
    {
        $this->representative = $representative;
    }

    /**
     * @return Informing
     */
    public function getInforming(): Informing
    {
        return $this->informing;
    }

    /**
     * @param Informing $informing
     */
    public function setInforming(Informing $informing): void
    {
        $this->informing = $informing;
    }

    /**
     * @return AdditionalInformation
     */
    public function getAdditionalInformation(): AdditionalInformation
    {
        return $this->additionalInformation;
    }

    /**
     * @param AdditionalInformation $additionalInformation
     */
    public function setAdditionalInformation(AdditionalInformation $additionalInformation): void
    {
        $this->additionalInformation = $additionalInformation;
    }

    /**
     * @return array
     */
    public function getServices(): array
    {
        return $this->services;
    }

    /**
     * @param Service|stdClass $service
     */
    public function addService(Service|stdClass $service): void
    {
        $this->services[] = $service;
    }

    /**
     * @return OrderSample
     */
    public function getOrderSamples(): OrderSample
    {
        return $this->orderSamples;
    }

    /**
     * @param OrderSample $orderSamples
     */
    public function setOrderSamples(OrderSample $orderSamples): void
    {
        $this->orderSamples = $orderSamples;
    }

    /**
     * @return array
     */
    public function getServicesSupplementals(): array
    {
        return $this->servicesSupplementals;
    }

    /**
     * @param ServicesSupplementals $servicesSupplementals
     */
    public function setServicesSupplementals(ServicesSupplementals $servicesSupplementals): void
    {
        $this->servicesSupplementals = array($servicesSupplementals);
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return bool
     */
    public function isReadOnly(): bool
    {
        return $this->readOnly;
    }

    /**
     * @param bool $readOnly
     */
    public function setReadOnly(bool $readOnly): void
    {
        $this->readOnly = $readOnly;
    }

    /**
     * @return bool
     */
    public function isGuaranteeLetter(): bool
    {
        return $this->guaranteeLetter;
    }

    /**
     * @param bool $guaranteeLetter
     */
    public function setGuaranteeLetter(bool $guaranteeLetter): void
    {
        $this->guaranteeLetter = $guaranteeLetter;
    }

    /**
     * @return bool
     */
    public function isFlagTravel30Days(): bool
    {
        return $this->flagTravel30Days;
    }

    /**
     * @param bool $flagTravel30Days
     */
    public function setFlagTravel30Days(bool $flagTravel30Days): void
    {
        $this->flagTravel30Days = $flagTravel30Days;
    }

    /**
     * @return string
     */
    public function getTravelCountry(): string
    {
        return $this->travelCountry;
    }

    /**
     * @param string $travelCountry
     */
    public function setTravelCountry(string $travelCountry): void
    {
        $this->travelCountry = $travelCountry;
    }

    /**
     * @return string
     */
    public function getReturnDate(): string
    {
        return date_format($this->returnDate, 'Y-m-d');
    }

    /**
     * @param string $returnDate
     */
    public function setReturnDate(string $returnDate): void
    {
        $this->returnDate = date_create($returnDate);
    }

    /**
     * @return bool
     */
    public function isCovidVaccinationFlag(): bool
    {
        return $this->covidVaccinationFlag;
    }

    /**
     * @param bool $covidVaccinationFlag
     */
    public function setCovidVaccinationFlag(bool $covidVaccinationFlag): void
    {
        $this->covidVaccinationFlag = $covidVaccinationFlag;
    }

    /**
     * @return string
     */
    public function getCovidVaccineName(): string
    {
        return $this->covidVaccineName;
    }

    /**
     * @param string $covidVaccineName
     */
    public function setCovidVaccineName(string $covidVaccineName): void
    {
        $this->covidVaccineName = $covidVaccineName;
    }

    /**
     * @return string
     */
    public function getCovidFirstVaccinationDate(): string
    {
        return date_format($this->covidFirstVaccinationDate, 'Y-m-d');
    }

    /**
     * @param string $covidFirstVaccinationDate
     */
    public function setCovidFirstVaccinationDate(string $covidFirstVaccinationDate): void
    {
        $this->covidFirstVaccinationDate = date_create($covidFirstVaccinationDate);
    }

    /**
     * @return string
     */
    public function getCovidSecondVaccinationDate(): string
    {
        return date_format($this->covidSecondVaccinationDate, 'Y-m-d');
    }

    /**
     * @param string $covidSecondVaccinationDate
     */
    public function setCovidSecondVaccinationDate(string $covidSecondVaccinationDate): void
    {
        $this->covidSecondVaccinationDate = date_create($covidSecondVaccinationDate);
    }

    /**
     * @return bool
     */
    public function isFluVaccinationFlag(): bool
    {
        return $this->fluVaccinationFlag;
    }

    /**
     * @param bool $fluVaccinationFlag
     */
    public function setFluVaccinationFlag(bool $fluVaccinationFlag): void
    {
        $this->fluVaccinationFlag = $fluVaccinationFlag;
    }

    /**
     * @return string
     */
    public function getFluVaccineName(): string
    {
        return $this->fluVaccineName;
    }

    /**
     * @param string $fluVaccineName
     */
    public function setFluVaccineName(string $fluVaccineName): void
    {
        $this->fluVaccineName = $fluVaccineName;
    }

    /**
     * @return DateTimeInterface
     */
    public function getFluVaccinationDate(): DateTimeInterface
    {
        return $this->fluVaccinationDate;
    }

    /**
     * @param DateTimeInterface $fluVaccinationDate
     */
    public function setFluVaccinationDate(DateTimeInterface $fluVaccinationDate): void
    {
        $this->fluVaccinationDate = $fluVaccinationDate;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     */
    public function setCountryCode(string $countryCode): void
    {
        $this->countryCode = $countryCode;
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
        return $this->internationalPassportNumber;
    }

    /**
     * @param string $internationalPassportNumber
     */
    public function setInternationalPassportNumber(string $internationalPassportNumber): void
    {
        $this->internationalPassportNumber = $internationalPassportNumber;
    }

    /**
     * @return string
     */
    public function getInternationalPassportIssueDate(): string
    {
        return date_format($this->internationalPassportIssueDate, 'Y-m-d');
    }

    /**
     * @param string $internationalPassportIssueDate
     */
    public function setInternationalPassportIssueDate(string $internationalPassportIssueDate): void
    {
        $this->internationalPassportIssueDate = date_create($internationalPassportIssueDate);
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
            if ($value instanceof Patient){
                $newArr[strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $key))] = $value->toArray();
            } else {
                $newArr[strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $key))] = $value;
            }
        }
        return $newArr;
    }
}
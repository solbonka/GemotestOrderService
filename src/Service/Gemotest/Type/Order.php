<?php

namespace App\Service\Gemotest\Type;

class Order implements Arrayable
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
     * @var int
     */
    private int $orderStatus;

    /**
     * @var Patient
     */
    private Patient $patient;

    /**
     * @var array
     */
    private array $services;


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
     * @return array
     */
    public function getServices(): array
    {
        return $this->services;
    }

    /**
     * @param Service $service
     */
    public function addService(Service $service): void
    {
        $this->services = array($service);
    }

    public function toArray(): array
    {
        $newArr = [];
        $array = get_object_vars($this);
        foreach ($array as $key => $value)
        {
            if($value instanceOf Arrayable) {
                $newArr[strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $key))] = $value->toArray();
            } elseif (is_array($value)) {
                foreach ($value as $item){
                    if($item instanceOf Arrayable) {
                        $newArr[strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $key))][] = $item->toArray();
                    } else {
                        $newArr[strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $key))][] = $item;
                    }
                }
            } else {
                $newArr[strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $key))] = $value;
            }
        }
        return $newArr;
    }
}
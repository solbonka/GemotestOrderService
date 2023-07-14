<?php

namespace App\Service\Gemotest\Type;

class Service implements Arrayable
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var string
     */
    private string $biomaterialId;

    /**
     * @var string
     */
    private string $localizationId;

    /**
     * @var string
     */
    private string $transportId;

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
    public function getBiomaterialId(): string
    {
        return $this->biomaterialId;
    }

    /**
     * @param string $biomaterialId
     */
    public function setBiomaterialId(string $biomaterialId): void
    {
        $this->biomaterialId = $biomaterialId;
    }

    /**
     * @return string
     */
    public function getLocalizationId(): string
    {
        return $this->localizationId;
    }

    /**
     * @param string $localizationId
     */
    public function setLocalizationId(string $localizationId): void
    {
        $this->localizationId = $localizationId;
    }

    /**
     * @return string
     */
    public function getTransportId(): string
    {
        return $this->transportId;
    }

    /**
     * @param string $transportId
     */
    public function setTransportId(string $transportId): void
    {
        $this->transportId = $transportId;
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
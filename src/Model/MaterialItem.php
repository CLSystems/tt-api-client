<?php

namespace CLSystems\TradeTracker\Model;

class MaterialItem
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Campaign
     */
    private $campaign;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $creationDate;

    /**
     * @var string
     */
    private $modificationDate;

    /**
     * @var MaterialBannerDimension
     */
    private $materialBannerDimension;

    /**
     * @var boolean
     */
    private $referenceSupported;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $conditions;

    /**
     * @var string|null
     */
    private $validFromDate;

    /**
     * @var string|null
     */
    private $validToDate;

    /**
     * @var float
     */
    private $discountFixed;

    /**
     * @var float
     */
    private $discountVariable;

    /**
     * @var string|null
     */
    private $voucherCode;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Campaign
     */
    public function getCampaign(): Campaign
    {
        return $this->campaign;
    }

    /**
     * @param Campaign $campaign
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCreationDate(): string
    {
        return $this->creationDate;
    }

    /**
     * @param string $creationDate
     */
    public function setCreationDate(string $creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return string
     */
    public function getModificationDate(): string
    {
        return $this->modificationDate;
    }

    /**
     * @param string|null $modificationDate
     */
    public function setModificationDate(?string $modificationDate): void
    {
        $this->modificationDate = $modificationDate;
    }

    /**
     * @return MaterialBannerDimension
     */
    public function getMaterialBannerDimension(): MaterialBannerDimension
    {
        return $this->materialBannerDimension;
    }

    /**
     * @param MaterialBannerDimension|null $materialBannerDimension
     */
    public function setMaterialBannerDimension(?MaterialBannerDimension $materialBannerDimension): void
    {
        $this->materialBannerDimension = $materialBannerDimension;
    }

    /**
     * @return bool
     */
    public function isReferenceSupported(): bool
    {
        return $this->referenceSupported;
    }

    /**
     * @param bool $referenceSupported
     */
    public function setReferenceSupported(bool $referenceSupported): void
    {
        $this->referenceSupported = $referenceSupported;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getConditions(): string
    {
        return $this->conditions;
    }

    /**
     * @param string|null $conditions
     */
    public function setConditions(?string $conditions) : void
    {
        $this->conditions = $conditions;
    }

    /**
     * @return string
     */
    public function getValidFromDate() : string
    {
        return $this->validFromDate;
    }

    /**
     * @param string|null $validFromDate
     */
    public function setValidFromDate(?string $validFromDate) : void
    {
        $this->validFromDate = $validFromDate;
    }

    /**
     * @return mixed
     */
    public function getValidToDate()
    {
        return $this->validToDate;
    }

    /**
     * @param string|null $validToDate
     */
    public function setValidToDate(?string $validToDate) : void
    {
        $this->validToDate = $validToDate;
    }

    /**
     * @return float|null
     */
    public function getDiscountFixed() : ?float
    {
        return $this->discountFixed;
    }

    /**
     * @param float|null $discountFixed
     */
    public function setDiscountFixed(?float $discountFixed) : void
    {
        $this->discountFixed = $discountFixed;
    }

    /**
     * @return float|null
     */
    public function getDiscountVariable() : ?float
    {
        return $this->discountVariable;
    }

    /**
     * @param float|null $discountVariable
     */
    public function setDiscountVariable(?float $discountVariable) : void
    {
        $this->discountVariable = $discountVariable;
    }

    /**
     * @return string|null
     */
    public function getVoucherCode() : ?string
    {
        return $this->voucherCode;
    }

    /**
     * @param string|null $voucherCode
     */
    public function setVoucherCode(?string $voucherCode) : void
    {
        $this->voucherCode = $voucherCode;
    }

    /**
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     */
    public function setCode(?string $code) : void
    {
        $this->code = $code;
    }

}
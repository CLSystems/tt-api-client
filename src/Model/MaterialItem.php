<?php

namespace CLSystems\TradeTracker\Model;

class MaterialItem
{
    /**
     * @var integer
     */
    private $materialItemID;

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
     * @var \CLSystems\TradeTracker\Model\MaterialBannerDimension
     */
    private $materialBannerDimension;

    /**
     * @var boolean
     */
    private $referenceSupported;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $conditions;

    /**
     * @var string
     */
    private $validFromDate;

    /**
     * var string
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
     * @var string
     */
    private $voucherCode;

    /**
     * @var string
     */
    private $code;

    /**
     * @return int
     */
    public function getMaterialItemId()
    {
        return $this->materialItemID;
    }

    /**
     * @param $materialItemID
     */
    public function setMaterialItemId($materialItemID)
    {
        $this->materialItemID = $materialItemID;
    }

    /**
     * @return string
     */
    public function getCampaign()
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
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCreationDate() : string
    {
        return $this->creationDate;
    }

    /**
     * @param string $creationDate
     */
    public function setCreationDate(string $creationDate) : void
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return string
     */
    public function getModificationDate() : string
    {
        return $this->modificationDate;
    }

    /**
     * @param string $modificationDate
     */
    public function setModificationDate(string $modificationDate) : void
    {
        $this->modificationDate = $modificationDate;
    }

    /**
     * @return MaterialBannerDimension
     */
    public function getMaterialBannerDimension() : MaterialBannerDimension
    {
        return $this->materialBannerDimension;
    }

    /**
     * @param MaterialBannerDimension $materialBannerDimension
     */
    public function setMaterialBannerDimension(MaterialBannerDimension $materialBannerDimension) : void
    {
        $this->materialBannerDimension = $materialBannerDimension;
    }

    /**
     * @return bool
     */
    public function isReferenceSupported() : bool
    {
        return $this->referenceSupported;
    }

    /**
     * @param bool $referenceSupported
     */
    public function setReferenceSupported(bool $referenceSupported) : void
    {
        $this->referenceSupported = $referenceSupported;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getConditions() : string
    {
        return $this->conditions;
    }

    /**
     * @param string $conditions
     */
    public function setConditions(string $conditions) : void
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
     * @param string $validFromDate
     */
    public function setValidFromDate(string $validFromDate) : void
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
     * @param mixed $validToDate
     */
    public function setValidToDate($validToDate) : void
    {
        $this->validToDate = $validToDate;
    }

    /**
     * @return float
     */
    public function getDiscountFixed() : float
    {
        return $this->discountFixed;
    }

    /**
     * @param float $discountFixed
     */
    public function setDiscountFixed(float $discountFixed) : void
    {
        $this->discountFixed = $discountFixed;
    }

    /**
     * @return float
     */
    public function getDiscountVariable() : float
    {
        return $this->discountVariable;
    }

    /**
     * @param float $discountVariable
     */
    public function setDiscountVariable(float $discountVariable) : void
    {
        $this->discountVariable = $discountVariable;
    }

    /**
     * @return string
     */
    public function getVoucherCode() : string
    {
        return $this->voucherCode;
    }

    /**
     * @param string $voucherCode
     */
    public function setVoucherCode(string $voucherCode) : void
    {
        $this->voucherCode = $voucherCode;
    }

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code) : void
    {
        $this->code = $code;
    }

}
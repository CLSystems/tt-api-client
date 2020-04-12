<?php


namespace CLSystems\TradeTracker\Model;


class MaterialBannerDimension
{
    /**
     * @var integer
     */
    private $ID;

    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var boolean
     */
    private $isCommon;

    /**
     * @var boolean
     */
    private $isMobile;

    /**
     * @return int
     */
    public function getID() : int
    {
        return $this->ID;
    }

    /**
     * @param int $id
     */
    public function setID(int $id) : void
    {
        $this->ID = $id;
    }

    /**
     * @return int
     */
    public function getWidth() : int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width) : void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight() : int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height) : void
    {
        $this->height = $height;
    }

    /**
     * @return bool
     */
    public function isCommon() : bool
    {
        return $this->isCommon;
    }

    /**
     * @param bool $isCommon
     */
    public function setIsCommon(bool $isCommon) : void
    {
        $this->isCommon = $isCommon;
    }

    /**
     * @return bool
     */
    public function isMobile() : bool
    {
        return $this->isMobile;
    }

    /**
     * @param bool $isMobile
     */
    public function setIsMobile(bool $isMobile) : void
    {
        $this->isMobile = $isMobile;
    }


}
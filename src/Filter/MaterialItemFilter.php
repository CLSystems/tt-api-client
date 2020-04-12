<?php

namespace CLSystems\TradeTracker\Filter;

use CLSystems\TradeTracker\Sort\Direction;
use CLSystems\TradeTracker\Sort\MaterialItem;

class MaterialItemFilter
{
    /**
     * @var int
     */
    private $materialItemID;

    /**
     * @var string
     */
    private $query;

    /**
     * @var integer
     */
    private $campaignID;

    /**
     * @var integer
     */
    private $campaignCategoryID;

    /**
     * @var boolean
     */
    private $includeUnsubscribedCampaigns;

    /**
     * @var integer
     */
    private $materialBannerDimensionID;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var integer
     */
    private $limit;

    /**
     * @var integer
     */
    private $offset;

    /**
     * @var \CLSystems\TradeTracker\Sort\MaterialItem
     */
    private $sort;

    /**
     * @var \CLSystems\TradeTracker\Sort\Direction
     */
    private $sortDirection;

    /**
     * @return int
     */
    public function getMaterialItemId()
    {
        return $this->materialItemID;
    }

    /**
     * @param integer $materialItemID
     */
    public function setMaterialItemId(int $materialItemID): void
    {
        $this->materialItemID = $materialItemID;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignID;
    }

    /**
     * @param int $campaignID
     */
    public function setCampaignId(int $campaignID): void
    {
        $this->campaignID = $campaignID;
    }

    /**
     * @return int
     */
    public function getCampaignCategoryId()
    {
        return $this->campaignCategoryID;
    }

    /**
     * @param int $campaignCategoryID
     */
    public function setCampaignCategoryId(int $campaignCategoryID): void
    {
        $this->campaignCategoryID = $campaignCategoryID;
    }

    /**
     * @return boolean
     */
    public function getIncludeUnsubscribedCampaigns()
    {
        return $this->includeUnsubscribedCampaigns;
    }

    /**
     * @param boolean $includeUnsubscribedCampaigns
     */
    public function setIncludeUnsubscribedCampaigns(bool $includeUnsubscribedCampaigns): void
    {
        $this->includeUnsubscribedCampaigns = $includeUnsubscribedCampaigns;
    }

    /**
     * @return int
     */
    public function getMaterialBannerDimensionId()
    {
        return $this->materialBannerDimensionID;
    }

    /**
     * @param int $materialBannerDimensionID
     */
    public function setMaterialBannerDimensionId(int $materialBannerDimensionID): void
    {
        $this->materialBannerDimensionID = $materialBannerDimensionID;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference(string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @return MaterialItem
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @var MaterialItem $sort
     */
    public function setSort(MaterialItem $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @return Direction
     */
    public function getSortDirection()
    {
        return $this->sortDirection;
    }

    /**
     * @var Direction $sortDirection
     */
    public function setSortDirection(Direction $sortDirection): void
    {
        $this->sortDirection = $sortDirection;
    }

}
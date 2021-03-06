<?php

namespace CLSystems\TradeTracker\Model;

class CampaignAttributionModel
{
    /**
     * @var string
     */
    private $attribute;

    /**
     * CampaignAttributionModel constructor.
     *
     * @param string|null $attribute
     */
    public function __construct($attribute = null)
    {
        $this->attribute = $attribute;
    }

    /**
     * @return string
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param string $attribute
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
    }
}

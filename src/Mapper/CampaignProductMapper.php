<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\CampaignProduct;

class CampaignProductMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignProduct
     */
    public function hydrate($value)
    {
        $campaignProduct = new CampaignProduct();
        $campaignProduct->setId($value->ID);
        $campaignProduct->setName($value->name);

        return $campaignProduct;
    }
}

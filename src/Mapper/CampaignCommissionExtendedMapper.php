<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\CampaignCommissionExtended;

class CampaignCommissionExtendedMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignCommissionExtended
     */
    public function hydrate($value)
    {
        $campaignCommissionExtended = new CampaignCommissionExtended();
        $campaignCommissionExtended->setImpressionCommission($value->impressionCommission);
        $campaignCommissionExtended->setClickCommission($value->clickCommission);
        $campaignCommissionExtended->setFixedCommission($value->fixedCommission);

        $data = [];
        $campaignCommissionProductMapper = new CampaignCommissionProductMapper();

        foreach ($value->products as $product) {
            $data[] = $campaignCommissionProductMapper->hydrate($product);
        }

        $campaignCommissionExtended->setProducts($data);
        return $campaignCommissionExtended;
    }
}

<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\CampaignAffiliatePolicyStatus;

class CampaignAffiliatePolicyStatusMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignAffiliatePolicyStatus
     */
    public function hydrate($value)
    {
        return new CampaignAffiliatePolicyStatus($value);
    }
}

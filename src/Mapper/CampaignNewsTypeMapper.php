<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\CampaignNewsType;

class CampaignNewsTypeMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignNewsType
     */
    public function hydrate($value)
    {
        return new CampaignNewsType($value);
    }
}

<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\CampaignAssignmentStatus;

class CampaignAssignmentStatusMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return CampaignAssignmentStatus
     */
    public function hydrate($value)
    {
        return new CampaignAssignmentStatus($value);
    }
}

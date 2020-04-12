<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\AffiliateSiteStatus;

class AffiliateSiteStatusMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return AffiliateSiteStatus
     */
    public function hydrate($value)
    {
        $affiliateSiteStatus = new AffiliateSiteStatus();
        $affiliateSiteStatus->setStatus($value);

        return $affiliateSiteStatus;
    }
}

<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\AffiliateSiteType;

class AffiliateSiteTypeMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return AffiliateSiteType
     */
    public function hydrate($value)
    {
        $affiliateSiteType = new AffiliateSiteType();
        $affiliateSiteType->setId($value->ID);
        $affiliateSiteType->setName($value->name);

        return $affiliateSiteType;
    }
}

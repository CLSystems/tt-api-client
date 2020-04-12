<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\AffiliateSiteCategory;

class AffiliateSiteCategoryMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return AffiliateSiteCategory
     */
    public function hydrate($value)
    {
        $affiliateSiteCategory = new AffiliateSiteCategory();
        $affiliateSiteCategory->setId($value->ID);
        $affiliateSiteCategory->setName($value->name);

        return $affiliateSiteCategory;
    }
}

<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\AffiliateSiteInfo;

class AffiliateSiteInfoMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return AffiliateSiteInfo
     */
    public function hydrate($value)
    {
        $affiliateSiteInfo = new AffiliateSiteInfo();
        $affiliateSiteInfo->setType((new AffiliateSiteTypeMapper())->hydrate($value->type));
        $affiliateSiteInfo->setCategory((new AffiliateSiteCategoryMapper())->hydrate($value->category));
        $affiliateSiteInfo->setDescription($value->description);
        $affiliateSiteInfo->setCreationDate(new \DateTime($value->creationDate));
        $affiliateSiteInfo->setStatus((new AffiliateSiteStatusMapper())->hydrate($value->status));

        return $affiliateSiteInfo;
    }
}

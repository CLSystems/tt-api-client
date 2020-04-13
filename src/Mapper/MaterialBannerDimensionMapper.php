<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\MaterialBannerDimension;

class MaterialBannerDimensionMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return MaterialItem
     */
    public function hydrate($value)
    {
        $item = new MaterialBannerDimension();
        $item->setId($value->ID);
        $item->setWidth($value->width);
        $item->setHeight($value->height);
        $item->setIsCommon($value->isCommon);
        $item->setIsMobile($value->isMobile);

        return $item;
    }
}

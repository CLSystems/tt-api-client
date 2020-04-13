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
        $item->setCampaign((new CampaignMapper())->hydrate($value->campaign));
        $item->setName($value->name);
        $item->setCreationDate($value->creationDate);
        $item->setModificationDate($value->modificationDate);
        $item->setMaterialBannerDimension((new MaterialBannerDimensionMapper())->hydrate($value->materialBannerDimension));
        $item->setReferenceSupported($value->referenceSupported);
        $item->setDescription($value->description);
        $item->setConditions($value->conditions);
        $item->setValidFromDate($value->validFromDate);
        $item->setValidToDate($value->validToDate);
        $item->setDiscountFixed($value->discountFixed);
        $item->setDiscountVariable($value->discountVariable);
        $item->setVoucherCode($value->voucherCode);
        $item->setCode($value->code);

        return $item;
    }
}

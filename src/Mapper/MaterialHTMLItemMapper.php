<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\MaterialHTMLItem;

class MaterialHTMLItemMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return MaterialHTMLItem
     */
    public function hydrate($value)
    {
        $item = new MaterialHTMLItem();
        $item->setId($value->ID);
        $item->setCampaign((new CampaignMapper())->$this->hydrate($value->campaign));
        $item->setName($value->name);
        $item->setCreationDate($value->creationDate);
        $item->setModificationDate($value->modificationDate);
        $item->setMaterialBannerDimension($value->materialBannerDimension);
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

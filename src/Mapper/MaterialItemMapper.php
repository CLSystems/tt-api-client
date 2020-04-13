<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\MaterialItem;

class MaterialItemMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return MaterialItem
     */
    public function hydrate($value)
    {
        var_dump($value); die;

        $item = new MaterialItem();
        $item->setMaterialItemId($value->materialItemID);
        $item->setCampaign((new CampaignMapper())->$this->hydrate($value->campaign));
        $item->setName($value->name);
        $item->setCreationDate($value->creationDate);
        $item->setModificationDate($value->modificationDate);


        return $item;
    }
}

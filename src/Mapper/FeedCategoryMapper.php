<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\FeedCategory;

class FeedCategoryMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return FeedCategory
     */
    public function hydrate($value)
    {
        $feedCategory = new FeedCategory();
        $feedCategory->setName($value->name);
        $feedCategory->setProductCount($value->productCount);

        return $feedCategory;
    }
}

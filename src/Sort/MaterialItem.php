<?php

namespace CLSystems\TradeTracker\Sort;

class MaterialItem
{
    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'ID',
            'creationDate',
            'modificationDate',
            'campaignName',
            'elementSize',
            'linkText',
        ];
    }
}
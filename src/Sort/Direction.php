<?php

namespace CLSystems\TradeTracker\Sort;

class Direction
{
    /**
     * @var string
     */
    private $SortDirection;

    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            'asc'  => 'ascending',
            'desc' => 'descending',
        ];
    }

    /**
     * @return string
     */
    public function getSortDirection()
    {
        return $this->SortDirection;
    }

    /**
     * @param string $sortDirection
     */
    public function setSortDirection(string $sortDirection): void
    {
        if (true === in_array($sortDirection, array_keys($this->getAllowedValues())))
        {
            $this->SortDirection = $sortDirection;
        }
        else
        {
            $this->SortDirection = $this->getAllowedValues()['asc'];
        }

    }
}
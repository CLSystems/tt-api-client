<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\TransactionType;

class TransactionTypeMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return TransactionType
     */
    public function hydrate($value)
    {
        return new TransactionType($value);
    }
}

<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\TransactionStatus;

class TransactionStatusMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return TransactionStatus
     */
    public function hydrate($value)
    {
        return new TransactionStatus($value);
    }
}

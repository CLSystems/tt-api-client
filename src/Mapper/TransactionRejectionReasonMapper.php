<?php

namespace CLSystems\TradeTracker\Mapper;

use CLSystems\TradeTracker\Model\TransactionRejectionReason;

class TransactionRejectionReasonMapper implements MapperInterface
{
    /**
     * {@inheritdoc}
     *
     * @return TransactionRejectionReason
     */
    public function hydrate($value)
    {
        return new TransactionRejectionReason($value);
    }
}

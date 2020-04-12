<?php

namespace CLSystems\TradeTracker\Normalizer;

interface NormalizerInterface
{
    /**
     * Normalizes the given value.
     *
     * @param mixed $value The value given.
     *
     * @return mixed
     */
    public function normalize($value);
}

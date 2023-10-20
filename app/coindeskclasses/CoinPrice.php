<?php

namespace App;

class CoinPrice
{
    private $rate;

    public function __construct($rate)
    {
        $this->rate = $rate;
    }

    public function getRate()
    {
        return $this->rate;
    }
}
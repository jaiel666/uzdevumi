<?php


namespace App;

use Carbon\Carbon;

class CoinDeskApplication
{
    public function run(): void
    {
        $currentDateTime = Carbon::now('Europe/Riga');
        $api = new CoinDeskAPI();
        $coinPrice = $api->fetchCoinPrice();
        echo "Current Date and Time: " . $currentDateTime->format('Y/m/d H:i A') . " and Current Bitcoin Price in EUR: " . $coinPrice->getRate() . "\n";
    }
}

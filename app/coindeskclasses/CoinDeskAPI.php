<?php

namespace App;

class CoinDeskAPI
{
    private $apiUrl = 'https://api.coindesk.com/v1/bpi/currentprice.json';

    public function fetchCoinPrice(): CoinPrice
    {
        $data = $this->fetchDataFromAPI();
        return new CoinPrice($data['bpi']['EUR']['rate']);
    }

    private function fetchDataFromAPI(): array
    {
        $response = file_get_contents($this->apiUrl);
        return json_decode($response, true);
    }
}

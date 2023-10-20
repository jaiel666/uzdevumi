<?php

namespace App;


class BoredAPI
{
    private string $apiUrl = 'https://www.boredapi.com/api/activity';

    public function fetchRandomActivity(): array
    {
        $response = file_get_contents($this->apiUrl);

        return json_decode($response, true);
    }
}
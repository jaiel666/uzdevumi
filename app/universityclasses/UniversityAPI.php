<?php

namespace App;

use GuzzleHttp\Client;

class UniversityAPI
{
    private string $apiUrl = 'http://universities.hipolabs.com/search?country=';
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function fetchUniversitiesByCountry(string $country): array
    {
        $url = "{$this->apiUrl}$country";

        $response = $this->client->get($url);

        $data = $response->getBody()->getContents();
        return json_decode($data, true);
    }
}

<?php
class ApiKey
{
    private string $apiBaseUrl = 'https://data.gov.lv/dati/lv/api/3/action/datastore_search?resource_id=25e80bf3-f107-4ab4-89ef-251b5b9374e9';

    public function fetchCompanyData(string $searchTerm): array
    {
        $url = $this->apiBaseUrl . '&q=' . urlencode($searchTerm);
        $data = file_get_contents($url);
        return json_decode($data, true);
    }
}

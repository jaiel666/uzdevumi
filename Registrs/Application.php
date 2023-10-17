<?php

class Application
{
    private ApiKey $application;

    public function __construct()
    {
        $this->application = new ApiKey();
    }

    public function run(): void
    {
        while (true) {
            echo "Search company data or type 'exit' to quit\n";
            $searchTerm = readline("Enter a company name or registration number: ");

            if ($searchTerm === 'exit') {
                break;
            }

            $companyData = $this->application->fetchCompanyData($searchTerm);

            if (empty($companyData)) {
                echo "No company information found for '$searchTerm'.\n";
            } else {
                $this->displayCompanyData($companyData['result']['records']);
            }
        }
    }

    private function displayCompanyData(array $data): void
    {
        echo '-----------------------------------' . "\n";
        echo count($data) . ' companies found!' . "\n";
        echo '---------------------------------' . "\n";

        foreach ($data as $company) {
            if (isset($company['name_in_quotes']) && !empty($company['name_in_quotes'])) {
                $name = $company['name_in_quotes'];
            } else {
                $name = $company['name'];
            }

            echo "Name: $name" . "\n";
            echo "Type: {$company['type']}" . "\n";
            echo "Registry Code: {$company['regcode']}" . "\n";
            echo "Registered: {$company['registered']}" . "\n";
            echo "Address: {$company['address']}" . "\n";
            echo '---------------------------------' . "\n";
        }
    }
}
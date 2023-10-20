<?php
namespace App;

class UniversityApplication {
    public function run(): void {
        $universityApi = new UniversityAPI();

        echo "Enter the country name: ";
        $country = readline();

        $data = $universityApi->fetchUniversitiesByCountry($country);

        $universityCollection = new UniversityCollection();

        if (!empty($data)) {
            foreach ($data as $universityData) {
                $university = new University(
                    $universityData['name'],
                    $universityData['country'],
                    $universityData['web_pages']
                );
                $universityCollection->addUniversity($university);
            }

            $universities = $universityCollection->getUniversities();

            if (!empty($universities)) {
                foreach ($universities as $university) {
                    /** @var University $university */
                    echo 'Name: ' . $university->getName() . "\n";
                    echo 'Country: ' . $university->getCountry() . "\n";
                    echo 'Website: ' . implode(', ', $university->getWebPages()) . "\n";
                    echo '-----------------------------------' . "\n";
                }
            } else {
                echo 'No data available for universities in this country' . "\n";
            }
        } else {
            echo "Failed to fetch data for the specified country" . "\n";
        }
    }
}
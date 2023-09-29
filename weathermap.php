<?php
$apiKey = "6891f499c77e1c03df0b56d48fa8ca51";

do {
    $city = readline("Enter city:");
    $cityCoordinates = json_decode(file_get_contents(
        "http://api.openweathermap.org/geo/1.0/direct?q=$city&limit=5&appid=$apiKey"
    ));
} while (empty($cityCoordinates));

$latitude = $cityCoordinates[0]->lat;
$longitude = $cityCoordinates[0]->lon;

$weatherRequest = json_decode(file_get_contents(
    "https://api.openweathermap.org/data/2.5/weather?lat=$latitude&lon=$longitude&appid=$apiKey&units=metric"
));

if ($weatherRequest) {
    echo "Weather in {$cityCoordinates[0]->name} ({$cityCoordinates[0]->country}): " . $weatherRequest->weather[0]->main . "\n";
    echo "Temperature: " . number_format($weatherRequest->main->temp, 1) . "°C\n";
    echo "Humidity: " . $weatherRequest->main->humidity . "%\n";
    echo "Wind Speed: " . $weatherRequest->wind->speed . " m/s\n";
} else {
    echo "No data received";
}


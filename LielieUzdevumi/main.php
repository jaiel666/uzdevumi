<?php
$episodes = json_decode(file_get_contents('https://rickandmortyapi.com/api/episode'));

var_dump($episodes);

foreach($episodes->results as $episode){
    echo $episode->name . PHP_EOL;
}


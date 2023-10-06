<?php

class Movie
{
    public $title;
    public $studio;
    public $rating;

    public function __construct($title, $studio, $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }
}

function GetPG($movies) {
    $pgMovies = array();
    $count = count($movies);

    for ($i = 0; $i < $count; $i++) {
        if ($movies[$i]->rating === "PG") {
            $pgMovies[] = $movies[$i];
        }
    }

    return $pgMovies;
}

$movie1 = new Movie("Casino Royale", "Eon Productions", "PG-13");
$movie2 = new Movie("Glass", "Buena Vista International", "PG-13");
$movie3 = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG");
$movie4 = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG");
$movie5 = new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG");

$movies = array($movie1, $movie2, $movie3, $movie4, $movie5);
$pgRatedMovies = GetPG($movies);

$count = count($pgRatedMovies);
for ($i = 0; $i < $count; $i++) {
    echo "Title: " . $pgRatedMovies[$i]->title . "\n";
    echo "Studio: " . $pgRatedMovies[$i]->studio . "\n";
    echo "Rating: " . $pgRatedMovies[$i]->rating . "\n";
    echo "------------------------\n";
}
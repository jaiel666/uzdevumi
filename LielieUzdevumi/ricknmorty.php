<?php

class RickAndMortyVideoStore
{
    private string $apiBaseUrl = 'https://rickandmortyapi.com/api/episode';
    private array $ratings;

    public function getEpisodes(): array
    {
        $episodesData = file_get_contents($this->apiBaseUrl);
        return json_decode($episodesData, true);
    }

    public function displayEpisodes(array $episodes): void
    {
        echo "-------------EPISODE LIST------------------------\n";
        foreach ($episodes['results'] as $episode) {
            $episodeId = $episode['id'];
            $episodeName = $episode['name'];
            if (isset($this->ratings[$episodeId])) {
                $rating = $this->ratings[$episodeId];
            } else {
                $rating = 'Not rated';
            }
            echo "Episode $episodeId: $episodeName - Rating: $rating\n";
        }
        echo "-------------------------------------------------\n";
    }

    public function rateEpisode(int $episodeId, int $rating): void
    {
        $this->ratings[$episodeId] = $rating;
    }

    public function displayRatedEpisodes(): void
    {
        echo "--------------RATED EPISODES-----------------------\n";
        foreach ($this->ratings as $episodeId => $rating) {
            echo "Episode $episodeId: Rating: $rating/10\n";
        }
        echo "---------------------------------------------------\n";
    }
}

class Application
{
    private RickAndMortyVideoStore $videoStore;
    private array $episodes;

    public function __construct()
    {
        $this->videoStore = new RickAndMortyVideoStore();
        $this->episodes = $this->videoStore->getEpisodes();
    }

    public function run(): void
    {
        echo "Welcome to Rick and Morty Video Store!\n";

        while (true) {
            echo "Choose the operation you want to perform:\n";
            echo "0. Exit\n";
            echo "1. List Episodes\n";
            echo "2. Rate an Episode\n";
            echo "3. Rated Episodes\n";

            $choice = (int)readline("Enter your choice: ");

            switch ($choice) {
                case 0:
                    echo "Bye!\n";
                    exit();
                case 1:
                    $this->videoStore->displayEpisodes($this->episodes);
                    break;
                case 2:
                    echo "-------------------------------------\n";
                    $episodeId = (int)readline("Enter the Episode ID to rate: ");
                    $rating = (int)readline("Enter your rating (1-10): ");
                    if ($rating >= 1 && $rating <= 10) {
                        $this->videoStore->rateEpisode($episodeId, $rating);
                    } else {
                        echo "Invalid rating. Please enter a rating between 1 and 10.\n";
                    }
                    echo "-------------------------------------\n";
                    break;
                case 3:
                    $this->videoStore->displayRatedEpisodes();
                    break;
                default:
                    echo "Invalid choice. Please try again.\n";
            }
        }
    }
}

$application = new ApiRequest();
$application->run();




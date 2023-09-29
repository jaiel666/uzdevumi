<?php
$wordList = [
    "programming",
    "computer",
    "school",
    "football",
    "university",
    "codelex",
];

function displayGameStatus($wordGame, $misses)
{
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
    echo "Word:\t$wordGame\n";
    echo "Misses:\t$misses\n";
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
}

do {
    $selectedWord = $wordList[array_rand($wordList)];

    $wordLength = strlen($selectedWord);
    $wordGame = str_repeat("_", $wordLength);
    $misses = "";
    $maxTries = 3;
    $tries = 0;

    while ($wordGame != $selectedWord && $tries < $maxTries) {
        displayGameStatus($wordGame, $misses);

        echo "Guess:\t";
        $guess = strtolower(readline());

        if (strlen($guess) !== 1 || !ctype_alpha($guess)) {
            echo "Please enter one letter.\n";
            continue;
        }

        if (strpos($selectedWord, $guess) !== false) {
            for ($i = 0; $i < $wordLength; $i++) {
                if ($selectedWord[$i] === $guess) {
                    $wordGame[$i] = $guess;
                }
            }
        } else {
            $misses .= $guess;
            $tries++;
        }
    }

    displayGameStatus($wordGame, $misses);

    if ($wordGame === $selectedWord) {
        echo "YOU GOT IT!\n";
    } else {
        echo "Out of tries. The word was: $selectedWord\n";
    }

    echo "Play \"again\" or \"quit\"? ";
    $playAgain = strtolower(readline());
} while ($playAgain === "again");



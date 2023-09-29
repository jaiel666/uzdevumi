<<<<<<< HEAD
<?php
for ($i = 1; $i <= 110; $i++) {
    $output = '';

    if ($i % 3 == 0 && $i % 5 == 0) {
        $output = "CozaLoza";
    }
    else if ($i % 3 == 0) {
        $output = "Coza";
    }
    else if ($i % 5 == 0) {
        $output = "Loza";
    }
    else if($i % 7 == 0) {
        $output = "Woza";
    }
    else if (empty($output)) {
        $output = $i;
    }

    echo $output . ' ';

    if ($i % 11 == 0) {
        echo "\n"; //
    }
=======
<?php
for ($i = 1; $i <= 110; $i++) {
    $output = '';

    if ($i % 3 == 0 && $i % 5 == 0) {
        $output = "CozaLoza";
    }
    else if ($i % 3 == 0) {
        $output = "Coza";
    }
    else if ($i % 5 == 0) {
        $output = "Loza";
    }
    else if($i % 7 == 0) {
        $output = "Woza";
    }
    else if (empty($output)) {
        $output = $i;
    }

    echo $output . ' ';

    if ($i % 11 == 0) {
        echo "\n"; //
    }
>>>>>>> 5766d1b72bfcb90bf1879d33a8d3c05c78b9a999
}
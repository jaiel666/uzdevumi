<?php

require_once 'vendor/autoload.php';

use App\CoinDeskApplication;

$app = new CoinDeskApplication();
$app->run();
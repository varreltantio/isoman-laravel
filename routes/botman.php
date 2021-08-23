<?php

use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('/gejala', BotManController::class . '@symptoms');
$botman->hears('/obat', BotManController::class . '@drug');

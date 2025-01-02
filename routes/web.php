<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

Route::get('/', function () {
    return view('welcome');
});


Route::get('setwebhook', function () {
    $response = Telegram::setWebhook(['url' => 'https://3872-213-230-93-97.ngrok-free.app/api/telegram/webhook']);

});

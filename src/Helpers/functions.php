<?php

use App\Controllers\MessageHandler;

function config($fileName="env.php"){
    $conf=include($_SERVER['DOCUMENT_ROOT']."/config/$fileName");
    return $conf;
}

function bot(){
    global $bot;
    return $bot;
}

function messageHandler(){
    return new MessageHandler();
}
<?php

require_once './vendor/autoload.php';
use Src\Bot;

//webhook manul setting

if(!empty($_GET['set'])){
    echo Bot::setWebhook();
}elseif(!empty($_GET['delete'])){
    echo Bot::deleteWebhook();
}
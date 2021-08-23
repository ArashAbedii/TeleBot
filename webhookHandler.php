<?php
require_once './vendor/autoload.php';
use Src\Bot;

if(!empty($_GET['set'])){
    Bot::setWebhook();
}elseif(!empty($_GET['delete'])){
    Bot::deleteWebhook();
}
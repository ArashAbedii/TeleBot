<?php
//BOOTSTRAP
require_once "../vendor/autoload.php";

use App\Controllers\CallbackQueryHandler;
use Src\Bot;

$bot=new Bot();


if($bot->update()->getType()=='message'){
    messageHandler()->run();
}elseif($bot->update->getType()=='callback_query'){
    CallbackQueryHandler::run();
}
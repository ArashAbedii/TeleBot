<?php

require_once "../vendor/autoload.php";
use App\Controllers\MessageHandler;
use Src\Bot;

$bot=new Bot();


//Bot::sendRequest('sendMessage',['chat_id'=>$bot->chat->getChatId(),'text'=>$bot->message->getText()]);

if($bot->update->getType()=='message'){
    MessageHandler::run();
}
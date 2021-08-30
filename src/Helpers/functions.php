<?php

use App\Controllers\CallbackQueryHandler;
use App\Controllers\ChannelPostHandler;
use App\Controllers\ChatMemberHandler;
use App\Controllers\EditedChannelPostHandler;
use App\Controllers\EditedMessageHandler;
use App\Controllers\InlineQueryHandler;
use App\Controllers\MessageHandler;
use App\Controllers\MyChatMemberHandler;
use App\Controllers\PollAnswerHandler;
use App\Controllers\PollHandler;
use Src\Audio;
use Src\CallbackQuery;
use Src\Chat;
use Src\Message;
use Src\Update;

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

function channelPostHandler(){
    return new ChannelPostHandler();
}

function callbackQueryHandler(){
    return new CallbackQueryHandler();
}

function inlineQueryHandler(){
    return new InlineQueryHandler();
}

function chatMemberHandler(){
    return new ChatMemberHandler();
}

function editedChannelPostHandler(){
    return new EditedChannelPostHandler();
}

function editedMessageHandler(){
    return new EditedMessageHandler();
}

function myChatMemberHandler(){
    return new MyChatMemberHandler();
}

function pollHandler(){
    return new PollHandler();
}

function pollAnswerHandler(){
    return new PollAnswerHandler();
}


//audio object helper
function audio(){
    global $audioObjHandler;

    if($audioObjHandler instanceof Audio){
       
        bot()->sendMessage(['text'=>'old obj']);
        return $audioObjHandler;

    }else{

        $audioObjHandler= new Audio();
        bot()->sendMessage(['text'=>'new obj']);
        return $audioObjHandler;
    }
}

//message object helper
function message(){
    global $messageObjHandler;
    if($messageObjHandler instanceof Message){
        return $messageObjHandler;
    }else{
        $messageObjHandler=new Message();
        return $messageObjHandler;
    }
}

//chat object helper
function chat(){
    global $chatObjHandler;
    if($chatObjHandler instanceof Chat){
        return $chatObjHandler;
    }else{
        $chatObjHandler=new Chat();
        return $chatObjHandler;
    }
}

//chat object helper
function update(){
    global $updateObjHandler;
    if($updateObjHandler instanceof Update){
        return $updateObjHandler;
    }else{
        $updateObjHandler=new Update();
        return $updateObjHandler;
    }
}

//callback query object helper
function callback_query(){
    global $callbackQueryObjHandler;
    if($callbackQueryObjHandler instanceof CallbackQuery){
        return $callbackQueryObjHandler;
    }else{
        $callbackQueryObjHandler=new CallbackQuery();
        return $callbackQueryObjHandler;
    }
}


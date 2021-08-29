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
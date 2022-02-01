<?php

use App\Controllers\CallbackQueryHandler;
use App\Controllers\ChannelPostHandler;
use App\Controllers\ChatJoinRequestHandler;
use App\Controllers\ChatMemberHandler;
use App\Controllers\EditedChannelPostHandler;
use App\Controllers\EditedMessageHandler;
use App\Controllers\InlineQueryHandler;
use App\Controllers\MessageHandler;
use App\Controllers\MyChatMemberHandler;
use App\Controllers\PollAnswerHandler;
use App\Controllers\PollHandler;
use App\Controllers\ShippingQueryHandler;
use Src\Media\Audio;
use Src\UpdateTypes\CallbackQuery;
use Src\UpdateTypes\Chat;
use Src\UpdateTypes\Message;
use Src\UpdateTypes\Update;
use Src\Media\Video;
use Src\Media\VideoNote;
use Src\UpdateTypes\ChatJoinRequest;
use Src\UpdateTypes\InlineQuery;
use Src\UpdateTypes\Poll;
use Src\UpdateTypes\PreCheckoutQuery;
use Src\UpdateTypes\ShippingQuery;

//return configure files
function config($fileName="env"){
    // if(!empty($_SERVER['DOCUMENT_ROOT'])){
    //     $conf=include($_SERVER['DOCUMENT_ROOT']."/config/$fileName.php");
    // }else{
    //     $conf=include($_SERVER['PWD']."/config/$fileName.php");
    // }
    $conf=include(dirname(dirname(__DIR__))."/config/$fileName.php");
    return $conf;
}

//bot object
function bot(){
    global $bot;
    return $bot;
}

//messageHandler object
function messageHandler(){
    return new MessageHandler();
}

//channelPostHandler object
function channelPostHandler(){
    return new ChannelPostHandler();
}

//callbackQueryHandler object
function callbackQueryHandler(){
    return new CallbackQueryHandler();
}

//callbackQueryHandler object
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


function chatJoinRequestHandler(){
    return new ChatJoinRequestHandler;
}

function shippingQueryHandler(){
    return new ShippingQueryHandler;
}

function preCheckoutQueryHandler(){
    return new PreCheckoutQuery;
}


//audio object helper
function audio(){
    global $audioObjHandler;

    if($audioObjHandler instanceof Audio){

        return $audioObjHandler;

    }else{

        $audioObjHandler= new Audio();
        return $audioObjHandler;
    }
}
//video object helper
function video(){
    global $videoObjHandler;

    if($videoObjHandler instanceof Video){

        return $videoObjHandler;

    }else{

        $videoObjHandler= new Video();
        return $videoObjHandler;
    }
}

//video note object helper
function video_note(){
    global $videoNoteObjHandler;
    if($videoNoteObjHandler instanceof VideoNote){
        return $videoNoteObjHandler;
    }else{
        $videoNoteObjHandler=new VideoNote();
        return $videoNoteObjHandler;
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

//inline query helper object
function inlineQuery(){
    global $inlineQueryObjHandler;
    if($inlineQueryObjHandler instanceof InlineQuery){
        return $inlineQueryObjHandler;
    }else{
        $inlineQueryObjHandler=new InlineQuery();
        return $inlineQueryObjHandler;
    }
}


//update object helper
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

//video note object helper
function poll(){
    global $pollObjHandler;
    if($pollObjHandler instanceof Poll){
        return $pollObjHandler;
    }else{
        $pollObjHandler=new Poll();
        return $pollObjHandler;
    }
}

function chat_join_request(){
    global $chatJoinRequestObjHandler;

    if($chatJoinRequestObjHandler instanceof ChatJoinRequest){
        $chatJoinRequestObjHandler;
    }else{
        $chatJoinRequestObjHandler=new ChatJoinRequest;
        return $chatJoinRequestObjHandler;
    }
}

function shipping_query(){
    global $shippingQueryObjHandler;

    if($shippingQueryObjHandler instanceof ShippingQuery){
        $shippingQueryObjHandler;
    }else{
        $shippingQueryObjHandler=new ShippingQuery;
        return $shippingQueryObjHandler;
    }
}

function pre_checkout_query(){
    global $preCheckoutQueryObjHandler;

    if($preCheckoutQueryObjHandler instanceof PreCheckoutQuery){
        $preCheckoutQueryObjHandler;
    }else{
        $preCheckoutQueryObjHandler=new PreCheckoutQuery;
        return $preCheckoutQueryObjHandler;
    }
}


function checkValidLink($link){
    
    preg_match("/(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/",message()->getText(),$matches);

    if($matches){
        return $matches[1];
    }
    return false;
}



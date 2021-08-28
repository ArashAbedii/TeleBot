<?php
//BOOTSTRAP
require_once "../vendor/autoload.php";

use App\Controllers\CallbackQueryHandler;
use Src\Bot;

$bot=new Bot();
//bot()->sendMessage(['text'=>json_encode(bot()->update())]);
// file_put_contents('debug.txt',json_encode(bot()->update()));
// die();

if($bot->update()->getType()=='message'){
    messageHandler()->run();
}elseif(bot()->update()->getType()=='callback_query'){
    CallbackQueryHandler::run();
}elseif(bot()->update()->getType()=='channel_post'){
    channelPostHandler()->run();
}
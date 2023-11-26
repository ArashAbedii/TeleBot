<?php

//BOOTSTRAP
require_once "../vendor/autoload.php";

use Src\Bot;
use Src\DBHandler;
use Src\Helpers\Utilities;

//bot starter
$bot=new Bot();
DBHandler::setup(true);


//lock channel
// Utilities::lock_on_channels(['-1001151835046'],message()->getFrom()->id,'join to channel');

//lock add memeber
// $count_added_memeber=Utilities::getCountAddedMemeber(message()->getFrom()->id);
// Utilities::lock_on_add_member(3,message()->getFrom()->id,$count_added_memeber,"you added $count_added_memeber members. you need to add 3 members");


//-------------------------------------------------------------------UPDATE HANDLERS----------------------------------------------------------------

switch(update()->getType()){

    case 'message':
        messageHandler()->run();
    break;


    case 'callback_query':
        callbackQueryHandler()->run();
    break;


    case 'channel_post':
        channelPostHandler()->run();
    break;


    case 'edited_message':
        editedMessageHandler()->run();
    break;


    case 'edited_channel_post':
        editedChannelPostHandler()->run();
    break;


    case 'inline_query':
        inlineQueryHandler()->run();
    break;


    case 'poll':
        pollHandler()->run();
    break;


    case 'poll_answer':
        pollAnswerHandler()->run();
    break;


    case 'my_chat_member':
        myChatMemberHandler()->run();
    break;


    case 'chat_member':
        chatMemberHandler()->run();
    break;

}
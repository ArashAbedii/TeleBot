<?php
//BOOTSTRAP
require_once "../vendor/autoload.php";

use Src\Bot;

$bot=new Bot();
 //bot()->sendMessage(['text'=>json_encode(update()->getUpdate())]);
 //file_put_contents('debug.txt',json_encode(update()->getUpdate()));
 //die();


if(update()->getType()=='message'){

    messageHandler()->run();

}elseif(update()->getType()=='callback_query'){

    callbackQueryHandler()->run();

}elseif(update()->getType()=='channel_post'){

    channelPostHandler()->run();

}elseif(update()->getType()=='edited_message'){

    editedMessageHandler()->run();

}elseif(update()->getType()=='edited_channel_post'){

    editedChannelPostHandler()->run();
    
}elseif(update()->getType()=='inline_query'){

    inlineQueryHandler()->run();
    
}elseif(update()->getType()=='poll'){

    pollHandler()->run();
    
}elseif(update()->getType()=='poll_answer'){

    pollAnswerHandler()->run();
    
}elseif(update()->getType()=='my_chat_member'){

    myChatMemberHandler()->run();
    
}elseif(update()->getType()=='chat_member'){

    chatMemberHandler()->run();
    
}
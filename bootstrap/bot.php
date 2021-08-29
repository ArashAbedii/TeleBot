<?php
//BOOTSTRAP
require_once "../vendor/autoload.php";

use Src\Bot;

$bot=new Bot();
//bot()->sendMessage(['text'=>json_encode(bot()->update())]);
// file_put_contents('debug.txt',json_encode(bot()->update()));
// die();

if($bot->update()->getType()=='message'){

    messageHandler()->run();

}elseif(bot()->update()->getType()=='callback_query'){

    callbackQueryHandler()->run();

}elseif(bot()->update()->getType()=='channel_post'){

    channelPostHandler()->run();

}elseif(bot()->update()->getType()=='edited_message'){

    editedMessageHandler()->run();

}elseif(bot()->update()->getType()=='edited_channel_post'){

    editedChannelPostHandler()->run();
    
}elseif(bot()->update()->getType()=='inline_query'){

    inlineQueryHandler()->run();
    
}elseif(bot()->update()->getType()=='poll'){

    pollHandler()->run();
    
}elseif(bot()->update()->getType()=='poll_answer'){

    pollAnswerHandler()->run();
    
}elseif(bot()->update()->getType()=='my_chat_member'){

    myChatMemberHandler()->run();
    
}elseif(bot()->update()->getType()=='chat_member'){

    chatMemberHandler()->run();
    
}
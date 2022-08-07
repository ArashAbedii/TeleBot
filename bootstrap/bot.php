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

//handling message update
if(update()->getType()=='message'){

    messageHandler()->run();

}
//handling callback_query update
elseif(update()->getType()=='callback_query'){

    callbackQueryHandler()->run();

}
//handling channel_post update
elseif(update()->getType()=='channel_post'){

    channelPostHandler()->run();

}
//edited_message update
elseif(update()->getType()=='edited_message'){

    editedMessageHandler()->run();

}
//handling edited_channel_post update
elseif(update()->getType()=='edited_channel_post'){

    editedChannelPostHandler()->run();
    
}
//handling inline_query update
elseif(update()->getType()=='inline_query'){

    inlineQueryHandler()->run();
    
}
//handling poll update
elseif(update()->getType()=='poll'){

    pollHandler()->run();
    
}
//handling poll_answer update
elseif(update()->getType()=='poll_answer'){

    pollAnswerHandler()->run();
    
}
//handling my_chat_member update
elseif(update()->getType()=='my_chat_member'){

    myChatMemberHandler()->run();
    
}
//handling chat_member update
elseif(update()->getType()=='chat_member'){

    chatMemberHandler()->run();

}
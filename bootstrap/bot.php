<?php

//BOOTSTRAP
require_once "../vendor/autoload.php";

use Src\Bot;

//bot starter
$bot=new Bot();


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
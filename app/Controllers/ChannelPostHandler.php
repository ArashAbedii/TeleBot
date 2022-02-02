<?php

namespace App\Controllers;

class ChannelPostHandler {
    public function run(){
        //forward channel messages to admin
        bot()->forwardMessage(['chat_id'=>admin(),'message_id'=>message()->getMessageId(),'from_chat_id'=>chat()->getChatId()]);
    }
}
<?php

namespace App\Controllers;

use Src\Message;

class MessageHandler extends Message {
     public function run(){
        //go something
        $this->sendRequest('sendMessage',['chat_id'=>$this->getChatId(),'text'=>'hello']);
     }
 }
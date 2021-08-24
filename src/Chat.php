<?php
namespace Src;
use Src\Update;
class Chat extends Update {

    public function getChatId(){
        return $this->message->chat->id;
    }

    public function getMessageId(){
        return $this->message->id;
    }
}
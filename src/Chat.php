<?php
namespace Src;
use Src\Update;
class Chat extends Update {

    public function getChatId(){

        if($this->getType()=='message'){
            return $this->message->chat->id;
        }elseif($this->getType()=='callback_query'){
            return $this->callback_query->message->chat->id;
        }elseif($this->getType()=='channel_post'){
           return $this->channel_post->chat->id;
        }
    }

}
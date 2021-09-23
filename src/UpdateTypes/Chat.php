<?php
namespace Src\UpdateTypes;

class Chat extends Update {

    public function getChatId(){

        if($this->getType()=='message'){
            return $this->message->chat->id;
        }elseif($this->getType()=='callback_query'){
            return $this->callback_query->message->chat->id;
        }elseif($this->getType()=='channel_post'){
           return $this->channel_post->chat->id;
        }elseif($this->getType()=='edited_channel_post'){
            return $this->edited_channel_post->chat->id;
        }elseif($this->getType()=='inline_query'){
            return $this->inline_query->from->id;
        }elseif($this->getType()==''){
            //return $this->
        }elseif($this->getType()==''){
            //return $this->
        }elseif($this->getType()==''){
            //return $this->
        }
    }

}
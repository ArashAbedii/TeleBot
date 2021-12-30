<?php
namespace Src\UpdateTypes;

class Chat extends Update {

    protected $chat_id;

    public function __construct()
    {
        parent::__construct();
      
        $this->setChatId();
    }

    public function getChatId(){
        return $this->chat_id;
    }

    private function setChatId(){
        if($this->getType()=='message'){
            $this->chat_id= $this->message->chat->id;
        }elseif($this->getType()=='callback_query'){
            $this->chat_id= $this->callback_query->message->chat->id;
        }elseif($this->getType()=='channel_post'){
            $this->chat_id= $this->channel_post->chat->id;
        }elseif($this->getType()=='edited_channel_post'){
            $this->chat_id= $this->edited_channel_post->chat->id;
        }elseif($this->getType()=='inline_query'){
            $this->chat_id= $this->inline_query->from->id;
        }elseif($this->getType()==''){
            //$this->chat_id= $this->
        }elseif($this->getType()==''){
            //$this->chat_id= $this->
        }elseif($this->getType()==''){
            //$this->chat_id= $this->
        }
    }

}
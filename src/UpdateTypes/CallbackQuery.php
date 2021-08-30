<?php

namespace Src\UpdateTypes;

class CallbackQuery extends Update {
    
    public function answerCallbackQuery(array $params){
        if(empty($params['callback_query_id'])){
            $params['callback_query_id']=$this->callback_query_id;
        }
        bot()->sendRequest('answerCallbackQuery',$params);
    }

    public function getCallbackQueryId(){
        return $this->callback_query->id;
    }

    public function getFrom(){
        return $this->callback_query->from;
    }

    public function getMessage(){
        return $this->callback_query->message;
    }

    public function getInlineMessageId(){
        return $this->callback_query->inline_message_id;
    }

    public function getChatInstance(){
        return $this->callback_query->chat_instance;
    }

    public function getData(){
        return $this->callback_query->data;
    }

    public function getGameShortName(){
        return $this->callback_query->game_short_name;
    }
}
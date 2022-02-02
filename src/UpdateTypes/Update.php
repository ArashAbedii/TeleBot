<?php

namespace Src\UpdateTypes;

class Update {
    
    private $type;
    public $update;
    protected $message;
    protected $edited_message;
    protected $channel_post;
    protected $edited_channel_post;
    protected $inline_query;
    protected $chosen_inline_result;
    protected $callback_query;
    protected $poll;
    protected $poll_answer;
    protected $my_chat_member;
    protected $chat_member;
    protected $chat_join_request;
    protected $pre_checkout_query; 
    protected $shipping_query; 

    public function __construct()
    {
        //GET UPDATES
        $this->update=json_decode(file_get_contents("php://input"));
    
        //SET UPDATE TYPE
        $this->setUpdateType();

        //SET PROPERTIES
        $this->initUpdate();


        
    }

    //SET UPDATE TYPES
    public function setUpdateType(){
        if(!empty($this->update->message)){
            $this->type= 'message';
        }elseif(!empty($this->update->edited_message)){
            $this->type= 'edited_message';
        }elseif(!empty($this->update->channel_post)){
            $this->type= 'channel_post';
        }elseif(!empty($this->update->edited_channel_post)){
            $this->type='edited_channel_post';
        }elseif(!empty($this->update->inline_query)){
            $this->type='inline_query';
        }elseif(!empty($this->update->chosen_inline_result)){
            $this->type='chosen_inline_result';
        }elseif(!empty($this->update->callback_query)){
            $this->type='callback_query';
        }elseif(!empty($this->update->poll)){
            $this->type='poll';
        }elseif(!empty($this->update->poll_answer)){
            $this->type='poll_answer';
        }elseif(!empty($this->update->my_chat_member)){
            $this->type='my_chat_member';
        }elseif(!empty($this->update->chat_member)){
            $this->type='chat_member';
        }elseif(!empty($this->update->chat_join_request)){
            $this->type='chat_join_request';
        }elseif(!empty($this->update->pre_checkout_query)){
            $this->type='pre_checkout_query';
        }elseif(!empty($this->update->shipping_query)){
            $this->type='shipping_query';
        }else{
            $this->type= null;
        }
    }

    //SET UPDATE PROPERTIES
    public function initUpdate(){

        //UPDATES TYPES

        switch($this->type){


            case 'message':
                //message
                $this->message=$this->update->message;
                $this->poll=!empty($this->update->message->poll) ? $this->update->message->poll : null;

            break;



            case 'callback_query':
                //callbackquery
                $this->callback_query=$this->update->callback_query;
                $this->message=$this->update->callback_query->message;
            break;



            case 'inline_query':
                //inline query
                $this->inline_query=$this->update->inline_query;
            break;



            case 'edited_message':
                //edited_message
                $this->edited_message=$this->update->edited_message;
            break;



            case 'channel_post':
                //channel post
                $this->channel_post=$this->update->channel_post;
            break;



            case 'edited_channel_post':
                //edited channel post
                $this->edited_channel_post=$this->update->edited_channel_post;
            break;
                


            case 'poll':
                $this->poll=$this->update->poll;
            break;



            case 'poll_answer':
                $this->poll_answer=$this->update->poll_answer;
            break;


            
            case 'my_chat_member':
                $this->my_chat_member=$this->update->my_chat_member;
            break;



            case 'chat_member':
                $this->chat_member=$this->update->chat_member;
            break;



            case 'chat_join_request':
                $this->chat_join_request=$this->update->chat_join_request;
            break;



            case 'pre_checkout_query':
                $this->pre_checkout_query=$this->update->pre_checkout_query;
            break;


            
            case 'shipping_query':
                $this->shipping_query=$this->update->shipping_query;
            break;

        }

        
    }

    //GET UPDATE TYPE
    public function getType(){
        return $this->type;
    }

    //GET UPDATE
    public function getUpdate(){
        return $this->update;
    }


}
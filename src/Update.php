<?php

namespace Src;

class Update {
    private $id;
    private $type;
    public $update;
    protected $message;
    private $edited_message;
    private $channel_post;
    private $edited_channel_post;
    private $inline_query;
    private $chosen_inline_result;
    private $callback_query;

    public function __construct()
    {
        $this->update=json_decode(file_get_contents("php://input"));
        $this->setUpdateType();
        if($this->type=='message'){
            $this->message=$this->update->message;
        }elseif($this->type=='callback_query'){
            //
            $this->callback_query=$this->update->callback_query;
        }elseif($this->type=''){
            //do something
        }
       
        
        
    }

    public function setUpdateType(){
        if(!empty($this->update->message)){
            $this->type= 'message';
        }elseif(!empty($this->update->edited_message)){
            $this->type= 'edited_message';
        }elseif(!empty($this->update->channel_post)){
            $this->type= 'channel_post';
        }elseif(!empty($this->update->edited_channel_post)){
            $this->type='edited_channel_post';
        }elseif($this->update->inline_query){
            $this->type='inline_query';
        }elseif(!empty($this->update->chosen_inline_result)){
            $this->type='chosen_inline_result';
        }elseif(!empty($this->update->callback_query)){
            $this->type='callback_query';
        }else{
            $this->type= null;
        }
    }

    public function getType(){
        return $this->type;
    }


}
<?php

namespace Src;

class Update {
    private $id;
    private $type;
    public $update;
    protected $message;
    protected $edited_message;
    protected $channel_post;
    protected $edited_channel_post;
    protected $inline_query;
    protected $chosen_inline_result;
    protected $callback_query;

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

    //SET UPDATE PROPERTIES
    public function initUpdate(){

        //UPDATES TYPES
        if($this->type=='message'){
            //message
            $this->message=$this->update->message;

        }elseif($this->type=='callback_query'){
            //callbackquery
            $this->callback_query=$this->update->callback_query;

        }elseif($this->type=='inline_query'){
            //inline query
            $this->inline_query=$this->update->inline_query;

        }elseif($this->type=='edited_message'){
            //edited_message
            $this->edited_message=$this->update->edited_message;

        }elseif($this->type=='channel_post'){
            //channel post
            $this->channel_post=$this->update->channel_post;

        }elseif($this->type=='edited_channel_post'){
            //edited channel post
            $this->edited_channel_post=$this->update->edited_channel_post;

        }elseif($this->type=='chosen_inline_result'){
            //chosen inline result
            $this->chosen_inline_result=$this->update->chosen_inline_result;

        }
    }

    //GET UPDATE TYPE
    public function getType(){
        return $this->type;
    }


}
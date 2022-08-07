<?php

namespace Src\Helpers;

use ErrorException;
use Src\Bot;

class Utilities{

    public static function inlineButtonsCreator($cols,$rows,array $data){

        $index=0;
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$cols;$j++){
                //$format=[['text'=>'test','type'=>'callback_data','value'=>'1'],['type'=>'callback_data','value'=>'2']]
                $type=$data[$index]['type'];
                $value=$data[$index]['value'];
                $inlineButtons[$i][]=['text'=>$data[$index]['text'],"$type"=>"$value"];
                $index++;
            }
        }
    
        return $inlineButtons;
    }

    public static function lock_on_channels(array $chat_ids,$user_id,$message){
        $error=false;
        
        foreach($chat_ids as $chat_id){
           
            $response=json_decode(bot()->getChatMember(['chat_id'=>$chat_id,'user_id'=>$user_id]));

            if($response->ok==false){
                bot()->sendMessage(['chat_id'=>$user_id,'text'=>'chat not found','reply_to_message_id'=>message()->getMessageId()]);
                return false;
            }if($response->ok && $response->result->status=='left'){
                $error=true;
            }
        }

        if($error===false){
            return true;
        }

        bot()->sendMessage(['chat_id'=>$user_id,'text'=>$message,'reply_to_message_id'=>message()->getMessageId()]);

        return false;
    }
}
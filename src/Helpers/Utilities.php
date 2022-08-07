<?php

namespace Src\Helpers;
use Illuminate\Database\Capsule\Manager as DB;
use Src\DBHandler;

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


    public static function getCountAddedMemeber($inviter_id,$chat_id='*'){
        //if you wanna use this method in the out of telebot u should uncomment DBHandler::setup(true);
        //DBHandler::setup(true);
        if($chat_id=='*'){
            $result= DB::select("select count(id) as invites from add_members where inviter_id='$inviter_id'");
        }else{
            $result= DB::select("select count(id) as invites from add_members where inviter_id='$inviter_id' and chat_id='$chat_id'");
        }
 
        return $result[0]->invites;
    }


    public static function lock_on_add_member($count_member,$inviter_id,$count_added_memeber=null,$message='you need to add more members',$chat_id='*',$lock=true){
        
        if($count_added_memeber===null){
            $count_added_memeber=self::getCountAddedMemeber($inviter_id,$chat_id);
        }
        
        if($count_added_memeber<$count_member){

            bot()->sendMessage(['chat_id'=>$inviter_id,'text'=>$message,'reply_to_message_id'=>message()->getMessageId()]);

            if($lock){
                exit();
            }

            return false;
        }

        return true;
        
    }
}
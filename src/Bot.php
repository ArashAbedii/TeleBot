<?php

namespace Src;

use ArashAbedii\Server;

//CORE BOT CLASS

class Bot {

    //chat_id generator
    public function paramsGenerator($params){

        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }

        return $params;
    }

    //----------------------MESSAGES---------------------------

    public function getMe(){
        return $this->sendRequest('getMe');
    }

    public function sendMessage(array $params){

        return $this->sendRequest('sendMessage',$this->paramsGenerator($params));
    }


    public function editMessageText(array $params){

        return $this->sendRequest('editMessageText',$this->paramsGenerator($params));
    }


    public function editMessageCaption(array $params){

        return $this->sendRequest('editMessageCaption',$this->paramsGenerator($params));
    }


    public function editMessageMedia(array $params){

        return $this->sendRequest('editMessageMedia',$this->paramsGenerator($params));
    }


    public function editMessageReplyMarkup(array $params){

        return $this->sendRequest('editMessageReplyMarkup',$this->paramsGenerator($params));
    }


    public function stopPoll(array $params){

        return $this->sendRequest('stopPoll',$this->paramsGenerator($params));
    }


    public function deleteMessage(array $params){

        return $this->sendRequest('deleteMessage',$this->paramsGenerator($params));
    }


    public function forwardMessage(array $params){

        return $this->sendRequest('forwardMessage',$this->paramsGenerator($params));
    }


    public function copyMessage(array $params){

        return $this->sendRequest('copyMessage',$this->paramsGenerator($params));
    }


    public function pinChatMessage(array $params){

        return $this->sendRequest('pinChatMessage',$this->paramsGenerator($params));
    }


    public function unpinChatMessage(array $params){
        return $this->sendRequest('unpinChatMessage',$this->paramsGenerator($params));
    }


    //-----------------------END_MESSAGES-------------------



    //----------------------AUDIO---------------------------
    public function sendAudio(array $params){

        return $this->sendRequest('sendAudio',$this->paramsGenerator($params));
    }

    //SEND VOICE
    public function sendVoice(array $params){

        return $this->sendRequest('sendVoice',$this->paramsGenerator($params));
    }

    //--------------------END_AUDIO--------------------------




    //---------------------PHOTO-----------------------------

    public function sendPhoto(array $params){

        return $this->sendRequest('sendPhoto',$this->paramsGenerator($params));
    }

    //-------------------END_PHOTO----------------------------


    //-------------------DOCUMENT-----------------------------
    public function sendDocument(array $params){

        return $this->sendRequest('sendDocument',$this->paramsGenerator($params));
    }

    //-------------------END_DOCUMENT-------------------------



    //--------------------VIDEO-----------------------------
    public function sendVideo(array $params){

        return $this->sendRequest('sendVideo',$this->paramsGenerator($params));
    }

    //---------------------END_VIDEO------------------------


    //--------------------ANIMATION-----------------------
    public function sendAnimation(array $params){

        return $this->sendRequest('sendAnimation',$this->paramsGenerator($params));
    }

    //-------------------END_ANIMATION---------------------



    //---------------------MEDIA--------------------------

    public function sendMediaGroup(array $params){

        return $this->sendRequest('sendMediaGroup',$this->paramsGenerator($params));
    }

    //-------------------END_MEDIA------------------------


    //--------------------LOCATION---------------------
    public function sendLocation(array $params){

        return $this->sendRequest('sendLocation',$this->paramsGenerator($params));
    }

    //-----------------END_LOCATION--------------------------


    //------------------CONTACT------------------------------
    public function sendContact(array $params){

        return $this->sendRequest('sendContact',$this->paramsGenerator($params));
    }

    //--------------END_CONTACT-------------------------------

    //------------------POLL-----------------------------
    public function sendPoll(array $params){

        return $this->sendRequest('sendPoll',$this->paramsGenerator($params));
    }

    //-----------------END_POLL--------------------------


    //---------------------CHATS--------------------------
    
    public function sendChatAction(array $params){

        return $this->sendRequest('sendChatAction',$this->paramsGenerator($params));
    }


    public function getUserProfilePhotos(array $params){

        return $this->sendRequest('getUserProfilePhotos',$this->paramsGenerator($params));
    }


    public function getFile(array $params){

        return $this->sendRequest('getFile',$this->paramsGenerator($params));
    }


    public function leaveChat(array $params){

        return $this->sendRequest('leaveChat',$this->paramsGenerator($params));
    }


    public function getChat(array $params=[]){

        return $this->sendRequest('getChat',$this->paramsGenerator($params));
    }


    public function getChatAdministrators(array $params){

        return $this->sendRequest('getChatAdministrators',$this->paramsGenerator($params));
    }


    public function getChatMemberCount(array $params){

        return $this->sendRequest('getChatMemberCount',$this->paramsGenerator($params));
    }


    public function getChatMember(array $params){

        return $this->sendRequest('getChatMember',$this->paramsGenerator($params));
    }

    //----------------END_CHATS----------------------------



    //----------------------CALLBACK_QUERY-----------------------
    public function answerCallbackQuery(array $params){

        return $this->sendRequest('answerCallbackQuery',$this->paramsGenerator($params));
    }

    //---------------------END_CALLBACK_QUERY----------------------


    //-------------------INLINE------------------
    public function answerInlineQuery($inlineQueryId,array $results,array $options=[]){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        $options['inline_query_id']=$inlineQueryId;
        $options['results']=json_encode($results);

        return $this->sendRequest('answerInlineQuery',$options);
    }
    
    //-----------------END_INLINE---------------------------



    //--------------------------------------------REQUESTERS-------------------------------------------------------

    //redirect all input requests from telegram servers
    static function redirectRequests($url="",$params=null){

        if(!$params){
            $params=file_get_contents("php://input");
        }
       
        if(empty($url)){
            $url=config()['bot_main_path'];
        }

        if(empty($params)){
            return null;
        }
        
        return Server::sendRequestWithoutResponse($url,'post',$params);
    }

    //get telegram update types
    public function getUpdateType(){
        return update()->getType();
    }

    //set webhook helper
    public static function setWebhook(){
        $token=config()['token'];
        $url=config()['request_handler_path'];
        $reqUrl="https://api.telegram.org/bot$token/setWebhook?url=$url";
        return Server::sendRequest($reqUrl);
    }

    //delete webhook helper
    public static function deleteWebhook(){
        $token=config()['token'];
        $url=config()['request_handler_path'];
        $reqUrl="https://api.telegram.org/bot$token/deleteWebhook?url=$url";
       return Server::sendRequest($reqUrl);
    }

    //create telegram request
    public static function sendRequest($method,array $params=[]){
        $token=config()['token'];
        $reqUrl="https://api.telegram.org/bot$token/$method";
        return Server::sendRequest($reqUrl,$params,'post');
    }

}
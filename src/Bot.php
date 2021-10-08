<?php

namespace Src;

class Bot {

    //HELPERS

    //----------------------MESSAGES---------------------------

    public function sendMessage(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendMessage',$params);
    }


    public function editMessageText(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('editMessageText',$params);
    }


    public function editMessageCaption(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('editMessageCaption',$params);
    }


    public function editMessageMedia(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('editMessageMedia',$params);
    }


    public function editMessageReplyMarkup(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('editMessageReplyMarkup',$params);
    }


    public function stopPoll(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('stopPoll',$params);
    }


    public function deleteMessage(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('deleteMessage',$params);
    }


    public function forwardMessage(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('forwardMessage',$params);
    }


    public function copyMessage(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('copyMessage',$params);
    }


    public function pinChatMessage(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('pinChatMessage',$params);
    }


    public function unpinChatMessage(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('unpinChatMessage',$params);
    }


    //-----------------------END_MESSAGES-------------------



    //----------------------AUDIO---------------------------
    public function sendAudio(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendAudio',$params);
    }

    //SEND VOICE
    public function sendVoice(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendVoice',$params);
    }

    //--------------------END_AUDIO--------------------------




    //---------------------PHOTO-----------------------------

    public function sendPhoto(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendPhoto',$params);
    }

    //-------------------END_PHOTO----------------------------


    //-------------------DOCUMENT-----------------------------
    public function sendDocument(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendDocument',$params);
    }

    //-------------------END_DOCUMENT-------------------------



    //--------------------VIDEO-----------------------------
    public function sendVideo(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendVideo',$params);
    }

    //---------------------END_VIDEO------------------------


    //--------------------ANIMATION-----------------------
    public function sendAnimation(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendAnimation',$params);
    }

    //-------------------END_ANIMATION---------------------



    //---------------------MEDIA--------------------------

    public function sendMediaGroup(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendMediaGroup',$params);
    }

    //-------------------END_MEDIA------------------------


    //--------------------LOCATION---------------------
    public function sendLocation(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendLocation',$params);
    }

    //-----------------END_LOCATION--------------------------


    //------------------CONTACT------------------------------
    public function sendContact(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendContact',$params);
    }

    //--------------END_CONTACT-------------------------------

    //------------------POLL-----------------------------
    public function sendPoll(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendPoll',$params);
    }

    //-----------------END_POLL--------------------------


    //---------------------CHATS--------------------------
    
    public function sendChatAction(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('sendChatAction',$params);
    }


    public function getUserProfilePhotos(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('getUserProfilePhotos',$params);
    }


    public function getFile(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('getFile',$params);
    }


    public function leaveChat(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('leaveChat',$params);
    }


    public function getChat(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('getChat',$params);
    }


    public function getChatAdministrators(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('getChatAdministrators',$params);
    }


    public function getChatMemberCount(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('getChatMemberCount',$params);
    }


    public function getChatMember(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('getChatMember',$params);
    }

    //----------------END_CHATS----------------------------



    //----------------------CALLBACK_QUERY-----------------------
    public function answerCallbackQuery(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=chat()->getChatId();
        }
        return $this->sendRequest('answerCallbackQuery',$params);
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



    static function redirectRequests($url=""){
        $params=file_get_contents("php://input");

        if(empty($url)){
            $url=config()['bot_main_path'];
        }

        return Server::sendRequestWithoutResponse($url,$params);

    }

    public function getUpdateType(){
        return update()->getType();
    }

    public static function setWebhook(){
        $token=config()['token'];
        $url=config()['request_handler_path'];
        $reqUrl="https://api.telegram.org/bot$token/setWebhook?url=$url";
        var_dump(Server::sendRequest($reqUrl));
    }

    public static function deleteWebhook(){
        $token=config()['token'];
        $url=config()['request_handler_path'];
        $reqUrl="https://api.telegram.org/bot$token/deleteWebhook?url=$url";
        var_dump(Server::sendRequest($reqUrl));
    }

    public static function sendRequest($method,array $params){
        $token=config()['token'];
        $reqUrl="https://api.telegram.org/bot$token/$method";
        return Server::sendRequest($reqUrl,$params,'post');
    }


}
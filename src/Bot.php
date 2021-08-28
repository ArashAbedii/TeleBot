<?php

namespace Src;

class Bot {
   

    //RETURN MESSAGE OBJECT
    public function message(){
        return new Message();
    }

    //RETURN MESSAGE OBJECT
    public function chat(){
        return new Chat();
    }

    //RETURN MESSAGE OBJECT
    public function update(){
        return new Update();
    }




    //Helpers

    public function sendMessage(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=$this->chat()->getChatId();
            return $this->sendRequest('sendMessage',$params);
        }
    }


    static function redirectRequests($url=""){
        $params=file_get_contents("php://input");

        if(empty($url)){
            $url=config()['bot_main_path'];
        }

        return Server::sendRequestWithoutResponse($url,$params);

    }

    public function getUpdateType(){
        return $this->update()->getType();
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
        $token="632423848:AAECin8sUe_VdUqdAKnq8XlsAKSpUvqE2nU";
        $reqUrl="https://api.telegram.org/bot$token/$method";
        return Server::sendRequest($reqUrl,$params,'post');
    }
}
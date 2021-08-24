<?php

namespace Src;

class Bot {
   
    public $message;
    public $chat;
    public $update;

    public function __construct()
    {
        $this->update=new Update();
        $this->message=new Message();
        $this->chat=new Chat();
    }

    public function sendMessage(array $params){
        if(empty($params['chat_id'])){
            $params['chat_id']=$this->chat->getChatId();
            return $this->sendRequest('sendMessage',$params);
        }
    }


    static function redirectRequests($url=""){
        $params=file_get_contents("php://input");

        if(empty($url)){
            $url=config()['domain']."/public/bot.php";
        }

        return Server::sendRequestWithoutResponse($url,$params);


    }

    public function getUpdateType(){
        if(!empty($this->update->message)){
            return 'message';
        }elseif(!empty($this->update->callback_query)){
            return 'callback_query';
        }elseif(!empty($this->update->inline_query)){
            return 'inline_query';
        }
    }

    public static function setWebhook(){
        $token=config()['token'];
        $url=config()['bot_main_path'];
        $reqUrl="https://api.telegram.org/bot$token/setWebhook?url=$url";
        var_dump(Server::sendRequest($reqUrl));
    }

    public static function deleteWebhook(){
        $token=config()['token'];
        $url=config()['bot_main_path'];
        $reqUrl="https://api.telegram.org/bot$token/deleteWebhook?url=$url";
        var_dump(Server::sendRequest($reqUrl));
    }

    public static function sendRequest($method,array $params){
        $token="632423848:AAECin8sUe_VdUqdAKnq8XlsAKSpUvqE2nU";
        file_put_contents('tttt',$token);
        $reqUrl="https://api.telegram.org/bot$token/$method";
        return Server::sendRequest($reqUrl,$params,'post');
    }
}
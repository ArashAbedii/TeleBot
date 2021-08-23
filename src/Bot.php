<?php

namespace Src;

abstract class Bot {
    protected $token;
    protected $update;
    protected $messageType;


    public function __construct()
    {
        $this->update=json_decode(file_get_contents('php://input'));
        file_put_contents('test.txt',$this->update);
        $this->token=config()['token'];
    }



    abstract public function getChatId();
    abstract public function getText();
    abstract public function getMessageId();



    static function redirectRequests($url=""){
        $params=['update'=>file_get_contents("php://input")];

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
        $token=config()['token'];
        $reqUrl="https://api.telegram.org/bot$token/$method";
        return Server::sendRequest($reqUrl,$params,'post');
    }
}
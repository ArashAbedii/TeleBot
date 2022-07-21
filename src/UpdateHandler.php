<?php

namespace Src;

use ArashAbedii\Server;

class UpdateHandler{

    public static function longPolling(){
        $token=config()['token'];
        $url="https://api.telegram.org/bot$token/getUpdates";
        $params=['timeout'=>30];

        while(true){

            $latest_update_id_log='storage/latest_update_id.log';
    
            $update=Server::sendRequest($url,$params,'post');
    
            if(!empty($update)){
    
                $response=json_decode($update);
    
                var_dump($update);
    
                if(!empty($response->result)){
                    foreach($response->result as $incomUpdate){
                        Bot::redirectRequests("",json_encode($incomUpdate));
                    }
                    
                    $end=end($response->result);
                    $update_id=$end->update_id;
    
                    file_put_contents($latest_update_id_log,$update_id);
    
                    if(file_exists($latest_update_id_log)){
                        $latest_update_id=file_get_contents($latest_update_id_log);
                        $params=['offset'=>$latest_update_id+1,'timeout'=>20];
                    }
                }
            }
        }
    
    }
    
    
}
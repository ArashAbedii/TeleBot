
<?php

use Src\Bot;
use Src\Server;

include './vendor/autoload.php';
$url="https://api.telegram.org/bot5216728420:AAEIy0gHbM2wDjGu2Jpo9C60l-sQQFwhdzo/getUpdates";


$params=['timeout'=>20];

while(true){

        $file='storage/latest_update_id.log';

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

                file_put_contents($file,$update_id);

                if(file_exists($file)){
                    $latest_update_id=file_get_contents($file);
                    $params=['offset'=>$latest_update_id+1,'timeout'=>20];
                }
            }
        }





}



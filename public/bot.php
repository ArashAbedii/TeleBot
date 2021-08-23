<?php

// require_once './vendor/autoload.php';
// use App\Controllers\MessageHandler;
// use Src\Bot;


// $bot=new Bot();



// if($bot->getUpdateType()=='message'){
//     $messageHandler=new MessageHandler();
//     $messageHandler->run();
// }elseif($bot->getUpdateType()=='calback_query'){

// }

file_put_contents("app.txt",file_get_contents('php://input'));
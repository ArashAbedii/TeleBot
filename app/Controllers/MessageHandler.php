<?php

namespace App\Controllers;

use App\Modules\Hello;
use App\Modules\SayHello;
use Src\Message;

use function App\Modules\test;

class MessageHandler extends Message {
   public static function run(){
      global $bot;

      //do something
      if($bot->message->getText()=='hi'){
         //load modules
         SayHello::run();
         
      }

   }
 }
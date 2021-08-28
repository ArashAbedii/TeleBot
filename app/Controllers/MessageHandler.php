<?php

namespace App\Controllers;

use App\Modules\SayHello;
use Src\Message;
use Src\ReplyKeyboardMarkup;

class MessageHandler extends Message {
   public function run(){
       bot()->sendMessage(['text'=>$this->getText()]); //insert this code
   }
 }

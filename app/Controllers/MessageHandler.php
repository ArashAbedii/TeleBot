<?php

namespace App\Controllers;

use Src\Message;


class MessageHandler{
   public function run(){
      //do somethings
      //bot()->sendMessage(['text'=>bot()->audio()->getFileId()]);
      bot()->sendAudio(['audio'=>audio()->getFileId()]);
      bot()->sendAudio(['audio'=>audio()->getFileId()]);
   }
}

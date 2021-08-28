<?php

namespace App\Controllers;

use App\Modules\SayHello;
use Src\InlineKeyboardMarkup;
use Src\Message;
use Src\ReplyKeyboardMarkup;

class MessageHandler extends Message {
   public function run(){
      //do somethings
      bot()->sendMessage(['text'=>'hi','reply_markup'=>ReplyKeyboardMarkup::createEasyier("ok--loo")]);

      $rows=[
               [
                  ['text'=>'yes','url'=>'https://google.com'],['text'=>'yes','url'=>'https://google.com']
               ],
               [
                  ['text'=>'yes','url'=>'https://google.com']
               ],
      ];

      bot()->sendMessage(['text'=>'inline','reply_markup'=>InlineKeyboardMarkup::create($rows)]);
     
   }
 }

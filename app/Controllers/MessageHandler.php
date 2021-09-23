<?php

namespace App\Controllers;

use App\Modules\ExampleModule;
use Src\InlineKeyboardMarkup;

class MessageHandler{
   public function run(){
      //do somethings
      //ExampleModule::run()->example();
      $rows=[
         [
            ['text'=>'messages','switch_inline_query_current_chat'=>'msgs'],
         ]
         ];
      bot()->sendMessage(['text'=>'ok','reply_markup'=>InlineKeyboardMarkup::create($rows)]);
   }
}

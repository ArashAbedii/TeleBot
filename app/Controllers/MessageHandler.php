<?php

namespace App\Controllers;

use Src\InlineKeyboardMarkup;
use Src\ReplyKeyboardMarkup;

class MessageHandler{

   //main method
   public function run(){

      //do somethings
      if(message()->getText()=='/start'){

         //send simple message by options
         bot()->sendMessage(
            [
                  'text'=>"welcome to TeleBot Hello World example 😎\nTeleBot is an open source framework for creating any telegram bots\n<a href='https://github.com/arashabedii/telebot'>see more</a>",
                  'reply_to_message_id'=>message()->getMessageId(),
                  'parse_mode'=>'html',
                  'disable_web_page_preview'=>true,
                  //KEYBOARDS  PATERN LIKE: "$btn1--$btn2--$btn3//$btn4--$btn6//$btn7--$btn8::request_location"
                  'reply_markup'=>ReplyKeyboardMarkup::createEasyier("Inline--Shere Contact::request_contact//share location::request_location"),
                  
            ]
         );
      }elseif(message()->getText()=='Inline'){
         
            //create inline keyboard rows structure
            $rows=[

               //row 1
               [
                  ['text'=>'google','url'=>'https://google.com'],
                  ['text'=>'Say Hello','callback_data'=>'sayHello'],
               ],

               //row2
               [
                  ['text'=>'test inine query(need to turn on inline mode)','switch_inline_query'=>'telebot_tester'],
               ],

            ];

            //send request to telegram
            bot()->sendMessage(
               [
                  'text'=>'This is inline keyboard test',
                  'reply_markup'=>InlineKeyboardMarkup::create($rows),
               ]
            );
      }
   }
}

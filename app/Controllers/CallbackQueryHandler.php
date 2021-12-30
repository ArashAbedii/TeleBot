<?php

namespace App\Controllers;

class CallbackQueryHandler {

    public function run(){

        //code
        
        if(callback_query()->getData()=='sayHello'){

            bot()->answerCallbackQuery(
                [
                    'callback_query_id'=>callback_query()->getCallbackQueryId(),
                    'text'=>'Hello ☺️'
                ]
            );
        }
    }

}
<?php

namespace App\Modules;

class SayHello {
    public static function run(){
        global $bot;
        //do somethings
        $bot->sendMessage(['text'=>'Hello']);
    }
}
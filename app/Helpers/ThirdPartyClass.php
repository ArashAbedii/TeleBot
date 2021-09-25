<?php

namespace App\Helpers;

class ThiredPartyClass {

    public static function run(){
        return new ThiredPartyClass;
    }
    
    public function sayHello(){
        bot()->sendMessage(['text'=>'hello!']);
    }
}
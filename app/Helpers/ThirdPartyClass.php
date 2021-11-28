<?php

namespace App\Helpers;

class ThirdPartyClass {

    public static function run(){
        return new ThirdPartyClass;
    }
    
    public function sayHello(){
        bot()->sendMessage(['text'=>'hello!']);
    }
}
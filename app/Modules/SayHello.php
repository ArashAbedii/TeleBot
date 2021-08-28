<?php

namespace App\Modules;

class SayHello {

    public static function run(){
        return new SayHello;
    }

    public function example(){

        //code something
        bot()->sendMessage(['text'=>'example']);
    }
    
    public function say($input){
        bot()->sendMessage(['text'=>$input]);
    }
}
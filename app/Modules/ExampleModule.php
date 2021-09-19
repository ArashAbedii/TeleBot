<?php

namespace App\Modules;

class ExampleModule {

    public static function run(){
        return new ExampleModule;
    }

    public function example(){

        //code something
        bot()->sendMessage(['text'=>'example']);
    }
    
}
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;



class MessageHandler{
   public function run(){
      //do somethings
      ExampleModule::run()->example();
   }
}

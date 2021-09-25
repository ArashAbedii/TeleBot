<?php

namespace App\Controllers;

use App\Helpers\ThiredPartyClass;
use App\Modules\ExampleModule;

class MessageHandler{
   public function run(){
      //do somethings
      ExampleModule::run()->example();

      //use Thired party class
      ThiredPartyClass::run()->sayHello();
   }
}

# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Message Handler (new messages)

all updates by type message come to this class and you can work on every messages update comfortably.
<br>

### see message types on [telegram doc](https://core.telegram.org/bots/api#message)
<br>
<b>when new messages will receive, the run() method be called and your all code, will execute in run() method
<br>
write your codes in run() method</b>

<br>
<br>

## example

you can controll input messages :

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

   public function run(){

      //do somethings
      if(message()->getText()=='/start'){  //controll input message (use message()->getText() to get new messages)

            bot()->sendMessage(['text'=>"Hello to the TeleBot"]); //send message  (use bot()->sendMessage to sending any message)
      
      }

```
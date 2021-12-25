# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedi.com)

<br/>
<br/>

# Message Handler

all updates by type message come to this class and you can work on every messages update comfortably.
<br>

### see message types on [telegram doc](https://core.telegram.org/bots/api#message)
<br>
<b>when new messages will receive, the run() function be called and your all code, will execute in run() function
<br>
write your codes in run() function</b>

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
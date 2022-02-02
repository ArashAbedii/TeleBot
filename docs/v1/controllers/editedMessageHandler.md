# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedi.com)

<br/>
<br/>

# Edited Message Handler (edit messages)

all updates by type edited_message come to this class and you can work on every messages update comfortably.
<br>

### see edited_message update params on [telegram doc](https://core.telegram.org/bots/api#message)
<br>
<b>when edited_message update will be received, the run() function be called and your all code, will execute in run() function
<br>
write your codes in run() function</b>

<br>
<br>

## example

you can controll new updates :

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class EditedMessageHandler{

   public function run(){
      //after edit a message ,the bot will send you edited message
      bot()->sendMessage(['text'=>'new text: '.message()->getText()]);
   }
}
```
# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Chat

the Chat class handles chats.

<br>

### see chat parameters on [telegram doc](https://core.telegram.org/bots/api#chat)
<br>
when new updates will receive, the chat() helper function be initialized and this function returns an object of Chat class and you can access all parameters of Chat type simply.


<br>
<br>

| method | to get telegram parameter |
| :---         |     :---:      |
| getChatId()   | id    | 
<!-- | git diff     | git diff       |  -->


## example

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

   public function run(){
        bot()->sendMessage(['chat_id'=>chat()->getChatId(),'text'=>'hello']);
   }
   
}

```

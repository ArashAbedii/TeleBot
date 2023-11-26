# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Forward Message To Client

<br>

### # forwardMessage(array $params)

You can forward messages to your client by calling forwardMessage() method. <br>
You can pass parameters in array to this function

<br>

### see forwardMessage parameters on [telegram doc](https://core.telegram.org/bots/api#forwardmessage)

<br>

## # examples


### # Forward message to current chat (user/channel/group)
<br>
for forwarding message to current chat, is not necessary to pass chat_id in forward message parameters. It fill automatically by Bot class

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

   public function run(){
       //$params=['param_name'=>'param_value']
        bot()->forwardMessage(['from_chat_id'=>'-100236598745','message_id'=>456]); //forward message to current chat
   }
   
}

```
<br>
<br>

### # Forward message to specific chat (user/channel/group)
<br>

for forwarding message to specific chat you can pass chat_id in forwardMessage parameters

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

   public function run(){
       //$params=['param_name'=>'param_value']
        bot()->forwardMessage(['chat_id'=>'785698365','from_chat_id'=>'-100236598745','message_id'=>456]); //forward message to specific chat by chat_id
   }
   
}

```

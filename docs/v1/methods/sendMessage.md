# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedi.com)

<br/>
<br/>

# Send Message To Client
<br>

### # sendMessage(array $params)

You can send text messages to your client by calling sendMessage() method. <br>
You can pass parameters in array to this function

<br>

### see sendMessage parameters on [telegram doc](https://core.telegram.org/bots/api#sendmessage)

<br>

## # examples


### # Send message to current chat (user/channel/group)
<br>
for sending message to current chat, is not necessary to pass chat_id in send message parameters. It fill automatically by Bot class

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

   public function run(){
       //$params=['param_name'=>'param_value']
        bot()->sendMessage(['text'=>'hello']); //send message to current chat
   }
   
}

```
<br>
<br>

### # Send message to specific chat (user/channel/group)
<br>

for sending message to specific chat you can pass chat_id in send message parameters

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

   public function run(){
       //$params=['param_name'=>'param_value']
        bot()->sendMessage(['chat_id'=>'785698365','text'=>'hello']); //send message to specific chat by chat_id
   }
   
}

```

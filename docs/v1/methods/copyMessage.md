# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Copy Message

<br>

### # copyMessage(array $params)

Use this method to copy messages of any kind. Service messages and invoice messages can't be copied. The method is analogous to the method forwardMessage, but the copied message doesn't have a link to the original message. Returns the MessageId of the sent message on success.
<br>
You can pass parameters in array to this function

<br>

### see copyMessage parameters on [telegram doc](https://core.telegram.org/bots/api#copymessage)

<br>

## # examples


### # copy message
<br>
for sending copied message to current chat, is not necessary to pass chat_id in copyMessage parameters. It fill automatically by Bot class

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

   public function run(){
       //$params=['param_name'=>'param_value']
        bot()->copyMessage(['from_chat_id'=>'-100236598745','message_id'=>456]); //send copied message to current chat
   }
   
}

```
<br>
<br>

### # send copied message to specific chat (user/channel/group)
<br>

for sending copied message to specific chat you can pass chat_id in copyMessage parameters

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

   public function run(){
       //$params=['param_name'=>'param_value']
        bot()->copyMessage(['chat_id'=>'785698365','from_chat_id'=>'-100236598745','message_id'=>456]); //send copied message to specific chat by chat_id
   }
   
}

```

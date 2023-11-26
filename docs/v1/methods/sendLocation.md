# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Send Location To Client

<br>

### # sendLocation(array $params)

You can send location to your client by calling sendLocation() method. <br>
You can pass parameters in array to this method

<br>

### see sendLocation parameters on [telegram doc](https://core.telegram.org/bots/api#sendvideonote)

<br>

## # examples


### # Send location to current chat (user/channel/group)
<br>
for sending location to current chat, is not necessary to pass chat_id in send sendLocation parameters. It fill automatically by Bot class

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendLocation(['latitude'=>'','longitude'=>'']); //send location to current chat
    }
   
}

```
<br>
<br>

### # Send location to specific chat (user/channel/group)
<br>

for sending location to specific chat you can pass chat_id in sendLocation parameters

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendLocation(['chat_id'=>'785698365','latitude'=>'','longitude'=>'']); //send location to specific chat by chat_id
    }
   
}

```

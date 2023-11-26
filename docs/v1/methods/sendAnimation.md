# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Send Animation To Client
<br>

### # sendAnimation(array $params)

You can send animation to your client by calling sendAnimation() method. <br>
You can pass parameters in array to this method

<br>

### see sendAnimation parameters on [telegram doc](https://core.telegram.org/bots/api#sendaudio)

<br>

## # examples


### # Send animation to current chat (user/channel/group)
<br>
for sending animation to current chat, is not necessary to pass chat_id in sendAnimation parameters. It fill automatically by Bot class

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendAnimation(['animation'=>'file_id or file_download_link']); //send animation to current chat
    }
   
}

```
<br>
<br>

### # Send animation to specific chat (user/channel/group)
<br>

for sending animation to specific chat you can pass chat_id in sendAnimation parameters

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendAnimation(['chat_id'=>'785698365','animation'=>'file_id or file_download_link']); //send animation to specific chat by chat_id
    }
   
}

```

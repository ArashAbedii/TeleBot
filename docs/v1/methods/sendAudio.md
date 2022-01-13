# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedi.com)

<br/>
<br/>

# Send Audio To Client
<br>

### # sendAudio(array $params)

You can send audio to your client by calling sendAudio() method. <br>
You can pass parameters in array to this method

<br>

### see sendAudio parameters on [telegram doc](https://core.telegram.org/bots/api#sendaudio)

<br>

## # examples


### # Send audio to current chat (user/channel/group)
<br>
for sending audio to current chat, is not necessary to pass chat_id in sendAudio parameters. It fill automatically by Bot class

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendAudio(['audio'=>'file_id or file_download_link']); //send audio to current chat
    }
   
}

```
<br>
<br>

### # Send audio to specific chat (user/channel/group)
<br>

for sending audio to specific chat you can pass chat_id in sendAudio parameters

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendAudio(['chat_id'=>'785698365','audio'=>'file_id or file_download_link']); //send audio to specific chat by chat_id
    }
   
}

```

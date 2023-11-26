# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Send Voice To Client
<br>

### # sendVoice(array $params)

You can send voice to your client by calling sendVoice() method. <br>
You can pass parameters in array to this method

<br>

### see sendVoice parameters on [telegram doc](https://core.telegram.org/bots/api#sendvoice)

<br>

## # examples


### # Send voice to current chat (user/channel/group)
<br>
for sending voice to current chat, is not necessary to pass chat_id in send sendVoice parameters. It fill automatically by Bot class

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendVoice(['voice'=>'file_id or file_download_link']); //send voice to current chat
    }
   
}

```
<br>
<br>

### # Send voice to specific chat (user/channel/group)
<br>

for sending voice to specific chat you can pass chat_id in sendVoice parameters

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendVoice(['chat_id'=>'785698365','voice'=>'file_id or file_download_link']); //send voice to specific chat by chat_id
    }
   
}

```

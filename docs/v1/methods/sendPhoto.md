# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Send Photo To Client
<br>

### # sendPhoto(array $params)

You can send photo to your client by calling sendPhoto() method. <br>
You can pass parameters in array to this method

<br>

### see sendPhoto parameters on [telegram doc](https://core.telegram.org/bots/api#sendphoto)

<br>

## # examples


### # Send photo to current chat (user/channel/group)
<br>
for sending photo to current chat, is not necessary to pass chat_id in send message parameters. It fill automatically by Bot class

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendPhoto(['photo'=>'file_id or file_download_link']); //send photo to current chat
    }
   
}

```
<br>
<br>

### # Send photo to specific chat (user/channel/group)
<br>

for sending photo to specific chat you can pass chat_id in sendPhoto parameters

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendPhoto(['chat_id'=>'785698365','photo'=>'file_id or file_download_link']); //send photo to specific chat by chat_id
    }
   
}

```

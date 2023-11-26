# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Send Video To Client
<br>

### # sendVideo(array $params)

You can send video to your client by calling sendVideo() method. <br>
You can pass parameters in array to this method

<br>

### see sendVideo parameters on [telegram doc](https://core.telegram.org/bots/api#sendvideo)

<br>

## # examples


### # Send video to current chat (user/channel/group)
<br>
for sending video to current chat, is not necessary to pass chat_id in send message parameters. It fill automatically by Bot class

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendVideo(['video'=>'file_id or file_download_link']); //send video to current chat
    }
   
}

```
<br>
<br>

### # Send video to specific chat (user/channel/group)
<br>

for sending video to specific chat you can pass chat_id in sendVideo parameters

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendVideo(['chat_id'=>'785698365','video'=>'file_id or file_download_link']); //send video to specific chat by chat_id
    }
   
}

```

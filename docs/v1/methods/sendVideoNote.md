# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Send VideoNote To Client

<br>

### # sendVideoNote(array $params)

You can send video_note to your client by calling sendVideoNote() method. <br>
You can pass parameters in array to this method

<br>

### see sendVideoNote parameters on [telegram doc](https://core.telegram.org/bots/api#sendvideonote)

<br>

## # examples


### # Send video_note to current chat (user/channel/group)
<br>
for sending video_note to current chat, is not necessary to pass chat_id in send sendVideoNote parameters. It fill automatically by Bot class

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendVideoNote(['video_note'=>'file_id or file_download_link']); //send video_note to current chat
    }
   
}

```
<br>
<br>

### # Send video_note to specific chat (user/channel/group)
<br>

for sending video_note to specific chat you can pass chat_id in sendVideoNote parameters

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendVideoNote(['chat_id'=>'785698365','video_note'=>'file_id or file_download_link']); //send video_note to specific chat by chat_id
    }
   
}

```

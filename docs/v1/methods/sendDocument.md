# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedi.com)

<br/>
<br/>

# Send Document To Client

<br>

### # sendDocument(array $params)

You can send document to your client by calling sendDocument() method. <br>
You can pass parameters in array to this method

<br>

### see sendDocument parameters on [telegram doc](https://core.telegram.org/bots/api#senddocument)

<br>

## # examples


### # Send document to current chat (user/channel/group)
<br>
for sending document to current chat, is not necessary to pass chat_id in sendDocument parameters. It fill automatically by Bot class

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendDocument(['document'=>'file_id or file_download_link']); //send document to current chat
    }
   
}

```
<br>
<br>

### # Send document to specific chat (user/channel/group)
<br>

for sending document to specific chat you can pass chat_id in sendDocument parameters

<br>

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->sendDocument(['chat_id'=>'785698365','document'=>'file_id or file_download_link']); //send document to specific chat by chat_id
    }
   
}

```

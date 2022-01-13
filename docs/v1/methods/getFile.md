# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedi.com)

<br/>
<br/>

# Get file info
<br>

### # getFile(array $params)

You can send get file info by file_id  <br>
Use this method to get basic info about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile again.

You can pass parameters in array to this method

<br>

### see getFile parameters on [telegram doc](https://core.telegram.org/bots/api#getfile)

<br>

## # examples

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->getFile(['file_id'=>'']);
    }
   
}

```

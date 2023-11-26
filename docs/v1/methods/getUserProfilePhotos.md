# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Get user profile photos
<br>

### # getUserProfilePhotos(array $params)

You can get user profile photos by calling getUserProfilePhotos() method. <br>
You can pass parameters in array to this method

<br>

### see getUserProfilePhotos parameters on [telegram doc](https://core.telegram.org/bots/api#sendaudio)

<br>

## # examples

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;

class MessageHandler{

    public function run(){
        //$params=['param_name'=>'param_value']
            bot()->getUserProfilePhotos(['user_id'=>'username or chat_id ...']); //get user profile photos
    }
   
}

```

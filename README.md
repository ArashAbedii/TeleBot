#  TELEGRAM BOT FRAMEWORK
### Create Everything <br/><br/><br/>


## Installition & Configration
#### clone this repository
```
git clone https://github.com/ArashAbedii/TeleBot
```
<br/>

go to the [@botfather](https://t.me/botfather) in telegram and create a new bot
then copy your api token.

<br/>

at first you need to configure your bot settings. so go to the config/env.php file.</br>
In the env.php you can define and setup every options on your bot that you want.

<br/>
<br/>

## necessary config fields
#### You should fill these settings
```PHP
$domain='YOUR_DOMAIN'; //PUT YOUR BOT ROOT HERE EXAMPLE: https://example.com/mybotDirectory

return [
    'token'=>'YOUR_TOKEN', //PUT YOUR TOKEN HERE
    'domain'=>$domain,
    'request_handler_path'=>$domain.'/requestsHandler.php',
    'bot_main_path'=>$domain.'/bootstrap/bot.php',
    'DB_CONNECTION'=>'mysql', //DATABASE CONNECTION => mysql or sqlite 
    'DB_NAME'=>'telebot',
    'DB_USERNAME'=>'root',
    'DB_PASSWORD'=>'',
];
```
<br/>

#### after config your bot now you need to set webHook
You can set webhook simply by running: <br/>
``` webhookHandler.php?set=1```

<br/>
</br/>

### Create a simple bot

go to the app/Controllers/MessageHandler.php file :

```php
<?php

namespace App\Controllers;

use Src\Message;

class MessageHandler extends Message {
   public function run(){
       bot()->sendMessage(['text'=>$this->getText()]); //insert this code
   }
 }

```

Now start your bot in telegram, then this bot send you every text message that you send to bot. Yes you did it. good job :)

### Now you can read [Documentions](https://arashabedii.github.io/TeleBot) for creating every type of telegram bot.


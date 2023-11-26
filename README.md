#  TELEGRAM BOT FRAMEWORK
### Create Everything <br/><br/><br/>


## Installition & Configration
<br>

#### composer
```
composer create-project arashabedii/telebot
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
<?php
<?php

$host='http://localhost:8005'; //PUT YOUR IP OR DOMAIN ADDRESS HERE. EXAMPLE: http://192.168.1.15
$botUrl=$host.''; //PUT BOT ROOT PATH HERE. EXAMPLE: $botUrl=$host.'/TeleBotDir';


return [
    'token'=>'BOT_TOKEN', //PUT YOUR BOT TOKEN HERE
    'ADMIN_CHAT_ID'=>'CHAT_ID', //PUT YOUR CHAT_ID HERE
    'host'=>$host,
    'bot_url'=>$botUrl,
    'request_handler_path'=>$botUrl.'/requestsHandler.php',
    'bot_main_path'=>$botUrl.'/bootstrap/bot.php',
    'DB_CONNECTION'=>'mysql', //or sqlite
    'DB_HOST'=>'localhost',
    'DB_NAME'=>'telebot', //database name
    'DB_USERNAME'=>'root', //database username
    'DB_PASSWORD'=>'', //database password
    'DB_CHARSET'=>'utf8',
    'DB_COLLATION'=>'utf8_unicode_ci',
    'APP_BASE_PATH'=>dirname(__DIR__),
];


```
<br/>

## Run bots

<br>

### Long Polling
with long polling way you can run bots without any domain and ssl and so on <br>
you can run the bot everywhere like: on your server or local machine
<br>
open terminal in your bot directory and run this command:
```
php artisan run:bot --long-polling

```

### webhook
you can use webhook too for running your bots

#### You can set webhook simply by running this command: <br/>
```
php artisan set:webhook

```
<br>

or run

``` 
YOUR_DOMAIN/webhookHandler.php?set=1

```

in your browser

<br/>


### Create a simple bot

go to the app/Controllers/MessageHandler.php file :

```php
<?php

namespace App\Controllers;

use Src\Message;

class MessageHandler {
   public function run(){
       bot()->sendMessage(['text'=>$this->getText()]); //insert this code
   }
 }

```

Now start your bot in telegram, then this bot send you every text message that you send to bot. Yes you did it. good job :)

### Now you can read [Documentions](https://arashabedii.github.io/TeleBot) for creating every type of telegram bot.


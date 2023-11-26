
# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# # Installation

```
composer create-project arashabedii/telebot

```

<br/>

## # Create a telegram bot on Telegram (get telegram api token)
go to the [@botfather](https://t.me/botfather) in telegram and create a new bot
then copy your api token.

<br/>

## # Configuration

at first you need to configure your bot settings. so go to the config/env.php file. <br/>
In the env.php you can define and setup every options on your bot that you want.

#### You should fill these settings

```php
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

## # Set WebHook

#### You can set webhook simply by running: <br/>
this command ```php artisan set:webhook``` in your project root directory 
<br>
or run
``` YOUR_DOMAIN/webhookHandler.php?set=1``` in your browser

<br/>


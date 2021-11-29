# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedi.com)

<br/>
<br/>

# # Installation

#### composer
```
composer require ...
```
### or

#### clone this repository
```
git clone https://github.com/ArashAbedii/TeleBot
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

## # Set WebHook

You can set webhook easily by running: <br/>

```
webhookHandler.php?set=1
```

<br/>
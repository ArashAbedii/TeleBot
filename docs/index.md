# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedi.com)

<br/>
<br/>

# what is this?
this is a php framework that you can create any telegram bots simply by this framework

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

#### You can set webhook simply by running: <br/>
this command ```php artisan set:webhook``` in your project root directory 
<br>
or run
``` YOUR_DOMAIN/webhookHandler.php?set=1``` in your browser

<br/>
</br/>

## # Create a simple bot

go to the app/Controllers/MessageHandler.php file :


```php
<?php

namespace App\Controllers;

use Src\Message;

class MessageHandler {
   public function run(){
       bot()->sendMessage(['text'=>message()->getText()]); //insert this code
   }
 }

```

Now start your bot in telegram, then this bot send you every text message that you send to bot. Yes you did it. good job :)

<br/>

# #Examples 

You can find examples for nearly every TeleBot function in
....


<br/>

# #Documentation

* [Features](v1/features.md) (empty - need to complete)
* [Installiation](v1/installiation.md)
* [Handling updates](v1/updates.md)
* [Database](v1/database.md) (empty - need to complete)
* [Chat](v1/chats.md) (empty - need to complete)
* [Messages](v1/messages.md) (empty - need to complete)
* [Files](v1/files.md) (empty - need to complete)
* [Methods](v1/methods.md) (empty - need to complete)
....

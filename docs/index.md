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

define('DOMAIN','YOUR_DOMAIN'); //PUT YOUR ROOT DOMAIN LIKE: https://domain.com/mybot
return [
    'token'=>'YOUR_TOKEN', //PUT YOUR BOT TOKEN Insted of YOR_TOKEN
    'domain'=>DOMAIN,
    'request_handler_path'=>DOMAIN.'/requestsHandler.php',
    'bot_main_path'=>DOMAIN.'/bootstrap/bot.php',
];

```

<br/>

## # Set WebHook

You can set webhook easily by running: <br/>

```
webhookHandler.php?set=1
```

<br/>
<br/>

## # Create a simple bot

go to the app/Controllers/MessageHandler.php file :


```php
<?php

namespace App\Controllers;

use App\Modules\SayHello;
use Src\Message;
use Src\ReplyKeyboardMarkup;

class MessageHandler extends Message {
   public function run(){
       bot()->sendMessage(['text'=>$this->getText()]); //insert this code
   }
 }

```

Now start your bot in telegram, then this bot send you every text message that you send to bot. Yes you did it. good job :)

<br/>

# #Examples 

You can find examples for nearly every MadelineProto function in
....

<br/>

# #Documentation

* [Features](../v1/features.md)
* Installiation
* Handling updates
* Database
* Chat
* Messages
* Files
* Methods
....

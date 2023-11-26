# TeleBot
### Telegram Bot Framework for creating any bots 

Created By [Arash Abedi](https://arashabedii.github.io)

<br/>
<br/>

# Channel Post Handler (new posts)

all updates by type channel_post type come to this class and you can work on channel_post update comfortably.
<br>

### see channel_post update type on [telegram doc](https://core.telegram.org/bots/api#message)
<br>
<b>when channel_post update will be received, the run() method be called and your all code, will execute in run() method
<br>
write your codes in run() method</b>

<br>
<br>

## example

you can controll channel_post updates :

```php
<?php

namespace App\Controllers;

use App\Modules\ExampleModule;


class ChannelPostHandler {
    public function run(){
        //forward channel messages to admin
        bot()->forwardMessage(['chat_id'=>admin(),'message_id'=>message()->getMessageId(),'from_chat_id'=>chat()->getChatId()]);
    }
}
```
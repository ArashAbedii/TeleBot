<?php
$domain='DOMAIN'; //PUT YOUR BOT ROOT HERE EXAMPLE: https://example.com/mybotDirectory



return [
    'token'=>'BOT_TOKEN', //PUT YOUR BOT TOKEN HERE
    'ADMIN_CHAT_ID'=>'YOUR_CHAT_ID', //PUT YOUR CHAT_ID HERE
    'domain'=>$domain,
    'request_handler_path'=>$domain.'/requestsHandler.php',
    'bot_main_path'=>$domain.'/bootstrap/bot.php',
    'DB_CONNECTION'=>'mysql', //or sqlite
    'DB_NAME'=>'telebot',
    'DB_USERNAME'=>'root',
    'DB_PASSWORD'=>'',
];


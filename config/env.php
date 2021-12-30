<?php
$domain='DOMAIN';



return [
    'token'=>'BOT_TOKEN',
    'domain'=>$domain,
    'request_handler_path'=>$domain.'/requestsHandler.php',
    'bot_main_path'=>$domain.'/bootstrap/bot.php',
    'DB_CONNECTION'=>'sqlite',
    'DB_NAME'=>'telebot',
    'DB_USERNAME'=>'arash',
    'DB_PASSWORD'=>'arash',
];

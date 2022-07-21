<?php
$server_address='http://localhost:8000'; //PUT YOUR BOT ROOT HERE EXAMPLE: http://192.168.1.9:8000/mybotDirectory

return [
    'token'=>'5482246466:AAG3XKnY7LhP8ce2FUEtIVHIuFWkD6cEmTs', //PUT YOUR BOT TOKEN HERE
    'ADMIN_CHAT_ID'=>'724490572', //PUT YOUR CHAT_ID HERE
    'domain'=>$server_address,
    'request_handler_path'=>$server_address.'/requestsHandler.php',
    'bot_main_path'=>$server_address.'/bootstrap/bot.php',
    'DB_CONNECTION'=>'mysql', //or sqlite
    'DB_HOST'=>'localhost',
    'DB_NAME'=>'telebot', //database name
    'DB_USERNAME'=>'root', //database username
    'DB_PASSWORD'=>'', //database password
    'DB_CHARSET'=>'utf8',
    'DB_COLLATION'=>'utf8_unicode_ci',
    'APP_BASE_PATH'=>dirname(__DIR__),
];


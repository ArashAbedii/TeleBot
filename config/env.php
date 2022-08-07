<?php
$server_address='http://localhost:8000'; //PUT YOUR BOT ROOT HERE EXAMPLE: http://192.168.1.9:8000/mybotDirectory

return [
    'token'=>'2058365201:AAExyLxx-CahO3hP5DhaIUdRdisKCkayuxk', //PUT YOUR BOT TOKEN HERE
    'ADMIN_CHAT_ID'=>'530351595', //PUT YOUR CHAT_ID HERE
    'domain'=>$server_address,
    'request_handler_path'=>$server_address.'/requestsHandler.php',
    'bot_main_path'=>$server_address.'/bootstrap/bot.php',
    'DB_CONNECTION'=>'mysql', //or sqlite
    'DB_HOST'=>'localhost',
    'DB_NAME'=>'telebotdev', //database name
    'DB_USERNAME'=>'arash', //database username
    'DB_PASSWORD'=>'arash', //database password
    'DB_CHARSET'=>'utf8',
    'DB_COLLATION'=>'utf8_unicode_ci',
    'APP_BASE_PATH'=>dirname(__DIR__),
];


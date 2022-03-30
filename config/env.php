<?php
$server_address='SERVER_ADDRESS'; //PUT YOUR BOT ROOT HERE EXAMPLE: http://192.168.1.9:8000/mybotDirectory



return [
    'token'=>'BOT_TOKEN', //PUT YOUR BOT TOKEN HERE
    'ADMIN_CHAT_ID'=>'YOUR_CHAT_ID', //PUT YOUR CHAT_ID HERE
    'domain'=>$server_address,
    'request_handler_path'=>$server_address.'/requestsHandler.php',
    'bot_main_path'=>$domain.'/bootstrap/bot.php',
    'DB_CONNECTION'=>'mysql', //or sqlite
    'DB_NAME'=>'telebot',
    'DB_USERNAME'=>'root',
    'DB_PASSWORD'=>'',
];


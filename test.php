
<?php

use App\Models\User;
use Database\Db;

require 'vendor/autoload.php';


// echo '<pre>';
// var_dump(json_decode(file_get_contents("bootstrap/debug.txt"),true));
// echo '</pre>';

//echo config()['DB_CONNECTION'];
// $db=Db::getInstance();
// echo '<pre>';
// var_dump($db->select('select * from users'));
// echo '</pre>';

$user=new User();

var_dump($user->getUser(1));

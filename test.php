
<?php

use App\Models\User;
use Database\Db;

require 'vendor/autoload.php';


$data=file_get_contents("config/env.php");
var_dump($data);

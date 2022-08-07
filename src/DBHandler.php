<?php

namespace Src;

use Illuminate\Database\Capsule\Manager as Capsule;

class DBHandler{

    public static function setup($ternon=false){

        if($ternon){
            $capsule = new Capsule;

            $capsule->addConnection([
                'driver' => config()['DB_CONNECTION'],
                'host' => config()['DB_HOST'],
                'database' => config()['DB_NAME'],
                'username' => config()['DB_USERNAME'],
                'password' => config()['DB_PASSWORD'],
                'charset' => config()['DB_CHARSET'],
                'collation' => config()['DB_COLLATION'],
            ]);
            $capsule->setAsGlobal(); 
            $capsule->bootEloquent();

        }

    }

}
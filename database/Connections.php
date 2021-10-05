<?php

namespace Database;

use mysqli;
use PDO;
use PDOException;
use SQLite3;

class Connections {
    public static function connectToMysqli($username,$password,$dbName,$server="localhost"){
        $db=new mysqli($server,$username,$password,$dbName);
        
        //check connection
        if($db->connect_error){
            return false;
        }

        return $db;
    }

    public static function connectToPDO($username,$password,$dbName,$server="localhost"){
        try{
            $db=new PDO("mysql:host=$server;dbname=$dbName",$username,$password);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db;
        }catch(PDOException $e){
            file_put_contents('PDOExeptions.log',$e);
            return false;
        }

    }

    public static function connectToSqlite($dbName){
        $db=new SQLite3($dbName);
        return $db;
    }
}
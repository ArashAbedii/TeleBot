<?php

namespace Database;

use Exception;
use PDO;
use stdClass;

class Model{

    protected $connection;

    // public static $instance;

    // public static function getInstance(){
    //     if(!static::$instance){
    //         return new Model;
    //     }
    //     return static::$instance;
    // }

    public function __construct()
    {
        $getConectionType=isset(config()['DB_CONNECTION']) ? config()['DB_CONNECTION'] : false;

        if(!$this->connection){
            if(!$getConectionType){
                return false;
            }
    
            if($getConectionType=='mysql'){
                $this->connection=Connections::connectToPDO(config()['DB_USERNAME'],config()['DB_PASSWORD'],config()['DB_NAME'],config()['DB_SERVER']);
                if($this->connection->errno){
                    die($this->connection->error);
                }
            }elseif($getConectionType=='sqlite'){
                $this->connection=Connections::connectToSqlite('database//database.sqlite');
                if($this->connection->errno){
                    die($this->connection->error);
                }
            }else{
                return false;
            }
        }


    }


    public function query($sql){
        if(empty($sql)){
            return false;
        }

        return $this->connection->query($sql);
    }

    public function insert($sql){
        $result=$this->query($sql);

        if(!$result){
            throw new Exception($this->connection->error);
        }

        if(config()['DB_CONNECTION']=='mysql'){
            return $this->connection->insert_id;
        }

        return $result;
        
    }

    public function select($sql){

        $result=$this->query($sql);

        if(!$result){
            throw new Exception($this->connection->error);
        }

        $data=[];
        if(config()['DB_CONNECTION']=='mysql'){
            while($row=$result->fetch(PDO::FETCH_NAMED)){
                array_push($data,$row);
            }
        }else{
            while($row=$result->fetchArray()){
                array_push($data,$row);
            }
        }


        return $data;
    }

    public function update($sql){
        $result=$this->query($sql);

        if(!$result){
            throw new Exception($this->connection->error);
        }

        return $result;
    }

    public function delete($sql){
        $result=$this->query($sql);

        if(!$result){
            throw new Exception($this->connection->error);
        }

        return $this->connection->affected_rows;
    }
}
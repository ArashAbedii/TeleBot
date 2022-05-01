<?php

namespace Src;

class Storage{

    public static function put($filename,$data){
        file_put_contents(config()['APP_BASE_PATH'].'/storage/'.$filename,$data);
    }

    public static function get($filename){
        if(file_exists(config()['APP_BASE_PATH'].'/storage/'.$filename)){
            return file_get_contents(config()['APP_BASE_PATH'].'/storage/'.$filename);
        }
        return false;
    }

    public static function delete($filename){
        if(file_exists(config()['APP_BASE_PATH'].'/storage/'.$filename)){
            return unlink(config()['APP_BASE_PATH'].'/storage/'.$filename);
        }
        return false;
    }

}
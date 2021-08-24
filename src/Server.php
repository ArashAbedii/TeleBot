<?php

namespace Src;

class Server{

    private static $err=false; 

    //USAGE SEND REQUEST FUNCTION

    public static function sendRequest($url,array $params=[],$type='get',array $headers=[]){

        //check valid data

        self::validateUrl($url);

        self::validHeaders($headers);

        self::validParams($params);

        self::validType($type);



        if(self::$err==true){

            echo "ERR! Check ErrHandler.log file on your project directory\n";

            return FALSE;

        }



        if(strtolower($type=='get')){

            //GET REQUESTS

            return self::sendGetRequests($url,$params,$headers);



        }elseif(strtolower($type)=='post'){

            //SEND POST REQUESTS

            return self::sendPostRequests($url,$params,$headers);

        }

    }

    //SEND REQUEST WITHOUT RESPONSE

    public static function sendRequestWithoutResponse($url,$params=[]){
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$params);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,false);
        curl_setopt($ch,CURLOPT_TIMEOUT,1);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,1);
        curl_exec($ch);
        curl_close($ch);
    }





    //GET REQUEST ACTION

    private static function sendGetRequests($url,array $params,array $headers=[]){

        $url=$url.self::changeArrayToGetFormat($params);

        //echo $url;

        //SEND CURL

        $ch=curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);

        if($headers){

            $headers=self::changeArrayToHeaderFormat($headers);

            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);

        }

        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $result=curl_exec($ch);

        curl_close($ch);

        return $result;



    }





    //POST REQUEST ACTION

    private static function sendPostRequests($url,array $params,array $headers=[]){


        //SEND CURL

        $ch=curl_init();

        curl_setopt($ch,CURLOPT_URL,$url);

        curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($params));

        

        if($headers){

            $headers=self::changeArrayToHeaderFormat($headers);

            curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);

        }

        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

        $result=curl_exec($ch);

        curl_close($ch);

        return $result;



    }







    //MAKING VALID FORMAT



    private static function changeArrayToGetFormat($params){

        $output=''; 

        foreach($params as $key=>$value){
            $value=str_replace(" ","%20",$value);
            $output.=$key."=".$value."&";

        }

        return "?".trim($output,"&"); //return GET format (?a=1&b=2&c=3)

    }



    private static function changeArrayToHeaderFormat($headers){

        $output=array();

        foreach($headers as $key=>$value){

            $output[]="$key: $value";

        }

        return $output; //return array of headers format (["Referer: https://www.google.com/","Content-type: audio/mpeg"])

    }





    //CHECK VALIDATE INPUTS

    private static function validateUrl($url){

        if(empty($url)){

            file_put_contents("ErrHandler.log","\nERR MESSAGE: Url required !\t".date("d M Y H:i:s"),FILE_APPEND);

            self::$err=true;

        }

        if(!filter_var($url,FILTER_VALIDATE_URL)){

            file_put_contents("ErrHandler.log","\nERR MESSAGE: Invalid url format !\t".date("d M Y H:i:s"),FILE_APPEND);

            self::$err=true;

        }

    }



    private static function validParams($params){

        if(!is_array($params)){

            file_put_contents("ErrHandler.log","\nERR MESSAGE: Invalid params format! params format should be an array\t".date("d M Y H:i:s"),FILE_APPEND);

            self::$err=true;

        }

    }



    private static function validHeaders($headers){

        if(!is_array($headers)){

            file_put_contents("ErrHandler.log","\nERR MESSAGE: Invalid headers format! headers format should be an array\t".date("d M Y H:i:s"),FILE_APPEND);

            self::$err=true;

        }

    }



    private static function validType($reqtype){

        if(empty($reqtype)){

            file_put_contents("ErrHandler.log","\nERR MESSAGE: Request type required! put GET or POST or etc type\t".date("d M Y H:i:s"),FILE_APPEND);

            self::$err=true;

        }

    }







}
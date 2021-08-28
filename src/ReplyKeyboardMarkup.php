<?php

namespace Src;

class ReplyKeyboardMarkup extends Update {


    //create kyboard rows object
    public static function create(array $rows,array $options=['resize_keyboard'=>true,'one_time_keyboard'=>false]){
        $keyboard=['keyboard'=>$rows,$options];
        return json_encode($keyboard);
    }

    //KEYBOARDS  PATERN LIKE: "$btn1--$btn2--$btn3//$btn4--$btn6//$btn7--$btn8"
    public static function createEasyier(string $patern,array $options=['resize_keyboard'=>true,'one_time_keyboard'=>false]){
        $rows=explode("//",$patern);
        $index=0;
        foreach($rows as $row){
            $cols[$index]=explode("--",$row);
            foreach($cols[$index] as $key=>$value){
                if(strpos($value,"::")!==false){
                    $as=explode("::",$value);
                    $cols[$index][$key]=[
                        'text'=>$as[0],
                        'request_contact'=>isset($as[1]) && $as[1]=="request_contact" ? true : false,
                        'request_location'=>isset($as[1]) && $as[1]=="request_location" ? true : false,
                    ];
                }
            }
            $index++;
        }
        $options['keyboard']=$cols;
        
        return json_encode($options);
    }
}
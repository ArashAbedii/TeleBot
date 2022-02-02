<?php

namespace Src\Helpers;

class Utilities{

    public static function inlineButtonsCreator($cols,$rows,array $data){

        $index=0;
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$cols;$j++){
                //$format=[['text'=>'test','type'=>'callback_data','value'=>'1'],['type'=>'callback_data','value'=>'2']]
                $type=$data[$index]['type'];
                $value=$data[$index]['value'];
                $inlineButtons[$i][]=['text'=>$data[$index]['text'],"$type"=>"$value"];
                $index++;
            }
        }
    
        return $inlineButtons;
    }
}
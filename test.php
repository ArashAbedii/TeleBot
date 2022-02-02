
<?php

function inlineTextButtonsCreator($cols,$rows,array $data){

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

echo '<pre>';
var_dump([inlineTextButtonsCreator(2,3,[['text'=>'hello','type'=>'url','value'=>'htp://google.com'],['text'=>'hello','type'=>'callback_data','value'=>'ok'],['text'=>'hello','type'=>'url','value'=>'htp://google.com'],['text'=>'hello','type'=>'url','value'=>'htp://google.com'],['text'=>'hello','type'=>'switch_inline_query','value'=>'test'],['text'=>'hello','type'=>'url','value'=>'htp://google.com'],['text'=>'hello','type'=>'url','value'=>'htp://google.com']])]);
echo '</pre>';

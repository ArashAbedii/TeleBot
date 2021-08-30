<?php

namespace Src;

class InlineKeyboardMarkup extends Update {
    
    public static function create(array $rows){
        return json_encode(['inline_keyboard'=>$rows]);
    }


}
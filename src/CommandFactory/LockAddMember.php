<?php

namespace Src\CommandFactory;

use Illuminate\Database\Capsule\Manager as DB;
use Src\DBHandler;

class LockAddMember{
    public static function install(){
        //connect to database
        DBHandler::setup(true);

        //run query
        DB::insert("create table if not exists add_members (id INTEGER PRIMARY KEY AUTO_INCREMENT,inviter_id char(20) not null,user_id char(20) not null,chat_id char(20) not null, updated_at timestamp DEFAULT CURRENT_TIMESTAMP, created_at timestamp DEFAULT CURRENT_TIMESTAMP);");
        
        return "add_memeber table created\n";
    }
}


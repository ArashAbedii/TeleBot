<?php

namespace App\Models;

use Database\Model;

class User extends Model {
    protected $table='users';

    public function getUser($id){
        return $this->select("select * from $this->table where id='$id'");
    }
}
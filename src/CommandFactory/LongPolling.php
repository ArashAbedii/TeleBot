<?php

namespace Src\CommandFactory;

use Src\UpdateHandler;

class LongPolling{
    public static function run(){
        return UpdateHandler::longPolling();
    }
}
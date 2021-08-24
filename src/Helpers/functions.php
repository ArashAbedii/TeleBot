<?php

function config($fileName="env.php"){
    $conf=include($_SERVER['DOCUMENT_ROOT']."/config/$fileName");
    return $conf;
}

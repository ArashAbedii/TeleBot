<?php

function config($fileName="env.php"){
    $conf=include("./config/$fileName");
    return $conf;
}


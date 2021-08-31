
<?php

echo '<pre>';
var_dump(json_decode(file_get_contents("bootstrap/debug.txt"),true));
echo '</pre>';
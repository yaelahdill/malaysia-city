<?php

$get = file_get_contents('region.json');
$get = json_decode($get);
echo $get;

?>

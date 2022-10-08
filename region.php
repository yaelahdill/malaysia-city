<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
$get = file_get_contents('region.json');

echo $get;

?>

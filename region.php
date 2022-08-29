<?php
header("Access-Control-Allow-Origin: *");
$get = file_get_contents('region.json');

echo $get;

?>

<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
$file = file_get_contents('state.json');

if(isset($_GET['search'])){
    $search = $_GET['search'];
    echo json_encode(json_decode($file, true)[$search]);
} else {
    echo $file;
}

?>
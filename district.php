<?php

$file = file_get_contents('district.json');

if(isset($_GET['search'])){
    $search = $_GET['search'];
    echo json_encode(json_decode($file, true)[$search]);
} else {
    echo $file;
}

?>
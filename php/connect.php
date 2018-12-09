<?php
    error_reporting(E_ALL);

    $conn = new mysqli('localhost', 'root', '', 'blog');
    $conn->set_charset("utf8");

    if($conn->connect_errno){
        echo "Connect error: ".$conn->connect_error;
        exit();
    }

?>
<?php
    error_reporting(E_ALL);

    //$conn = new mysqli('localhost', 'ksnajaro', 'agG3fJ9n48', 'ksnajaro_mydb');
    $conn = new mysqli('localhost', 'root', '', 'blog');
    $conn->set_charset("utf8");

    if($conn->connect_errno){
        echo "Connect error: ".$conn->connect_error;
        exit();
    }

    date_default_timezone_set('Asia/Bangkok');

?>
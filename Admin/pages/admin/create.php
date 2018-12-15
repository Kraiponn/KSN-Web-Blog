<?php include_once('../authen.php') ?>
<?php

    if(!isset($_POST['submit'])){
        header('refresh:0; url=index.php');
        return;
    }

    $sql_check_username = "SELECT * FROM admin WHERE username = '".$_POST['user_name']."'";
    $res_check_username = $conn->query($sql_check_username);
    if($res_check_username->num_rows > 0){
        echo "<script> alert('This user name is already exists'); </script>";
        header('refresh:0; url=index.php');
        return;
    }
    
    $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO `admin` (`first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) 
            VALUES (
                    '".$_POST['first_name']."',
                    '".$_POST['last_name']."', 
                    '".$_POST['user_name']."', 
                    '".$hashed."', 
                    '".$_POST['status']."', 
                    '".date('Y-m-d')."', 
                    '".date('Y-m-d')."', 
                    '".date('Y-m-d')."')";

    $result = $conn->query($sql) or die($conn->error);

    //print_r($result);
    if($result){
        echo "<script> alert('Added successfully'); </script>";
        header('refresh:0; url=index.php');
    }else{
        header('refresh:0; url=index.php');
    }

?>
<?php include_once('../authen.php') ?>
<?php
    //print_r($_POST);
    //echo $_POST['first_name'];

    if(isset($_POST['submit'])) {
        $sql = "UPDATE `admin` 
                SET `first_name` = '".$_POST['first_name']."', 
                `last_name` = '".$_POST['last_name']."', 
                `status` = '".$_POST['status']."', 
                `updated_at` = '".date('Y-m-d')."' 
                WHERE `admin`.`id` = '".$_POST['id']."'";
        $result = $conn->query($sql);
        if($result){
            echo "<script> alert('Updated successfully') </script>";
        }else{
            echo "<script> alert('Invalid Update data') </script>";
        }

        header('refresh:0; url=index.php');
    }else{
        header('refresh:0; url=index.php');
    }
?>
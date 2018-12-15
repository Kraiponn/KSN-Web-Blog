<?php include_once('../authen.php') ?>
<?php
    
    $id = $_GET['id'];
    if(isset($id) && $id != 1) {
        $sql = "DELETE FROM admin WHERE id = '".$id."'";
        $result = $conn->query($sql);

        if($conn->affected_rows > 0) {
            echo '<script> alert("Deleted successfully.")</script>'; 
            header('Refresh:0; url=index.php');
        }else{
            echo '<script> alert("Deleted fail, Please try again.")</script>'; 
            header('Refresh:0; url=index.php');
        }
    } else{
       header('Refresh:0; url=index.php');
    }

?>
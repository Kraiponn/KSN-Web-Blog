<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Creating!")</script>'; 
    // header('Refresh:0; url=index.php');
    echo '<pre>',print_r($_POST),'</pre>';
    print_r($_FILES['file']);
?>
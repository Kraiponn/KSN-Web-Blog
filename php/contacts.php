<?php 

    require_once('connect.php');

    if(!isset($_POST['btn-submit'])){
        header('refresh:0; url=../index.php');
        return;
    }

    //echo '<pre>',print_r($_POST),'</pre>';
    $secretKey = "6Leno34UAAAAAPVOjTLYaFYx-QVOtIKrRFHaY6ZW";
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];

    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteip";
    $resp = json_decode(file_get_contents($url));


    if($resp->success){
        //echo '<pre>',print_r($_POST),'</pre>';
        //echo date('Y-m-d');

        $sql = "INSERT INTO `contacts` (`name`, `phone`, `email`, `detail`, `created_at`) 
                VALUES ('".$_POST['name']."',
                        '".$_POST['phone']."',
                        '".$_POST['email']."',
                        '".$_POST['message']."',
                        '".date("Y-m-d")."');";
        $result = $conn->query($sql);
        if($result){
            //echo "Added message successfully";
            sendToLine();
        }else{
            echo '<script> alert("ส่งข้อมูลไม่สำเร็จ"); </script>';
            header('refresh:0; url=../contact.php');
        }
    }else{
        echo '<script> alert("Verification recaptchar failed!!"); </script>';
        header('refresh:0; url=../contact.php');
    }


    function sendToLine(){
        $text = "You have message from \n";
        $text .= "Name: ".$_POST['name']."\n";
        $text .= "Phone: ".$_POST['phone']."\n";
        $text .= "Email: ".$_POST['email']."\n";
        $text .= "Message: ".$_POST['message'];

        //echo $text;
        $message = array(
            'message' => $text
        );

        notify_message($message);
    }

    function notify_message($message){
        define('LINE_API', "https://notify-api.line.me/api/notify");
        define('LINE_TOKEN', "Te72o0QJQsznLC4rODgX6xmaJ3XrqOyaNdeRQVED0SM");

        $queryData = http_build_query($message, '', '&');
        $headerOption = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                            ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                            ."Content-Length: ".strlen($queryData)."\r\n",
                'content' => $queryData
            )
        );

        $context = stream_context_create($headerOption);
        $result = file_get_contents(LINE_API, FALSE, $context);
        //echo $result;

        $resp = json_decode($result);
        if($resp->status == 200){
            echo '<script> alert("ส่งข้อมูลสำเร็จ"); </script>';
            header("refresh:0; url=../index.php");
        }else{
            echo '<script> alert("ส่งข้อมูลไม่สำเร็จ"); </script>';
            header("refresh:0; url=../contact.php");
        }
    }

?>
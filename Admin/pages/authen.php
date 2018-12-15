<?php 
   session_start();
   require_once('../../../php/connect.php');
   $url =  $_SERVER['REQUEST_URI'];
   //echo $url;
   $array = explode('/', $url);
   //echo '<pre>',print_r($array),'</pre>';

   $key = array_search('pages', $array);
   $name = $array[$key+1];

   if( !isset($_SESSION['authen_id'] ) ){
      header('Location: ../../login.php');  
   }else if($name == 'admin' && $_SESSION['status'] == 'admin'){
      header('location: ../dashboard');
   }
?>
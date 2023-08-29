<?php
  session_start();
  include("../connect.php");
  $url = "";
  $redirectUrl=$url."/admin/login.php";

  if(!(isset($_COOKIE["username"]))){
    header("Location: " . $redirectUrl);
    exit();
  }

    
?>
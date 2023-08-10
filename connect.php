<?php
    $servername="localhost";
    $username_db="u170697705_sof";
    $password="Sof@2023";
    $database="u170697705_sofrootmain";

    $conn= mysqli_connect($servername,$username_db,$password,$database);
    if (! $conn ) {
        die('Sorry we failed to connect!');
    }

    
?>
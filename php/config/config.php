<?php 
    $dbhost = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "studentManagement";

    $conn = mysqli_connect($dbhost, $username, $password);
    mysqli_select_db($conn, $dbname);
?>

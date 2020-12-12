<?php 

session_start();
    $dbhost = "localhost";
    $username = "root";
    $password = "new_password";
    $dbname = "reeco";

    $conn = mysqli_connect($dbhost, $username, $password,$dbname);
    if(!$conn){
    echo "connection error".mysqli_connect_error();
}
?>
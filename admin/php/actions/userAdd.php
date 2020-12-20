<?php
    include "../config/config.php";
    $user_type = $_POST['user_type'];
    $username = $_POST['username'];
    $password = $_POST['user_password'];
    $hpassword = md5($password);

    mysqli_query($conn,"INSERT INTO auth (role,username,password,created_date) VALUES ('$user_type','$username','$hpassword',now())");
    header("location: /admin/table-user.php");
?>
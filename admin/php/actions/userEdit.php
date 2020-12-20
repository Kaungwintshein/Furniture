<?php
    include "../config//config.php";

    $id = $_POST['user_id'];
    $username = $_POST['username'];

    mysqli_query($conn,"UPDATE auth SET username='$username', created_date=now() WHERE id='$id'");
    header("location: /admin/table-user.php");
?>
<?php
    include "../config/config.php";

    if($_POST['deleteFromDb']){
        $id = $_POST['deleteFromDb'];
        mysqli_query($conn,"DELETE FROM category WHERE id='$id'");
    }
?>
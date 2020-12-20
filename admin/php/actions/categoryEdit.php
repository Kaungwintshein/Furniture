<?php 
    include("../config/config.php");
    // $id = $_POST['id'];
    // $category_name = $_POST['category_name'];
    $id = $_POST['category_id'];
    $category_name = $_POST['category_name'];
    mysqli_query($conn,"UPDATE category SET category_name='$category_name' WHERE id='$id'");
    header("location: /admin/table-category.php");
?>
<!-- <div class="container mt-4"> -->
<?php 
        
        // if(isset($_SESSION['add']))
        // {
        //     echo $_SESSION['add'];
        //     unset($_SESSION['add']);
        // }

        // if(isset($_SESSION['upload']))
        // {
        //     echo $_SESSION['upload'];
        //     unset($_SESSION['upload']);
        // }
    
    ?>
    <!-- <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">
                Category Name
            </label>
            <input  type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">
                Image
            </label>
            <input type="file" name="image" class="form-control">
        </div>
        <a href="/admin" class="btn btn-secondary">Cancel</a>
        <button type="submit" name="submit" value="Submit" class="btn btn-primary">Save</button>

    </form> -->
<!-- </div> -->

<?php 
include "../config/config.php";
if(isset($_POST['submitBtn'])){
    // $category_name = $_POST['category_name'];
    // $sql = "INSERT INTO category(category_name) VALUES ('$category_name')";
    // $res = mysqli_query($conn,$sql);

    $category_name = $_POST['category_name'];
    $sql = "INSERT INTO category(category_name) VALUES ('$category_name')";
    $res = mysqli_query($conn,$sql);

    if($res){
        //$_SESSION['add'] = "<div class='text-success'>Category Added Successfully.</div>";
        header('location:/admin/table-category.php');

    }else{
        $error = mysqli_error($conn);
        //$_SESSION['add'] = "<div class='text-danger'>Failed to Add Category.$error</div>";
        header('location:/admin/add-category.php');
    }


}

?>
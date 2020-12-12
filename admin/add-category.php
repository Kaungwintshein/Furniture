<?php include("./includes/header.php") ?>



<div class="container mt-4">
<?php 
        
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
    
    ?>
    <form action="" method="POST" enctype="multipart/form-data">

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

    </form>
</div>

<?php 

if(isset($_POST['submit'])){
    $category_name = $_POST['name'];
    if(isset($_FILES['image']['name'])){
        $category_img = $_FILES['image']['name'];

        if($category_img != ''){
            $ext = end(explode('.', $category_img));
        $category_img = "Category_".rand(000, 999).'.'.$ext;

        $source_path = $_FILES['image']['tmp_name'];
        
        $destination_path='../images/category/'.$category_img;
        
        $upload = move_uploaded_file($source_path,$destination_path);

            if($upload ==false){
                $_SESSION['upload'] = "<div class='text-danger'>Failed to Upload Image. </div>";
                header('location: /admin/add-category.php');
                die();
            }
        }
    else{
        $category_img="";
   }
        
    }

$sql = "INSERT INTO category(category_name,category_img) VALUES ('$category_name','$category_img')";

    $res = mysqli_query($conn,$sql);

if($res){
    $_SESSION['add'] = "<div class='text-success'>Category Added Successfully.</div>";
    header('location: /admin/manage-category.php');

}else{
      $error = mysqli_error($conn);
      $_SESSION['add'] = "<div class='text-danger'>Failed to Add Category.$error</div>";
      header('location: /admin/add-category.php');
}


}

?>


<?php include("./includes/footer.php") ?>
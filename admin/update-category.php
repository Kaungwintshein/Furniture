<?php include("./includes/header.php") ?>


<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM category WHERE id=$id";

    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if($count==1)
    {
        //Get all the data
        $row = mysqli_fetch_assoc($res);
        $category_name = $row['category_name'];
        $current_image = $row['category_img'];
    }
    else
    {
        //redirect to manage category with session message
        $_SESSION['no-category-found'] = "<div class='text-danger'>Category not Found.</div>";
        header('location:/admin/manage-category.php');
    }
}  else
{
    //redirect to Manage CAtegory
    header('location:/admin/manage-category.php');
}

?>

<div class="container mt-4">

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <label for="name">
                Category Name
            </label>
            <input value="<?php echo htmlspecialchars($category_name) ?>" type="text" name="name" class="form-control">
        </div>

        <div>
            <label for="image">
                Current image
            </label>
            <?php 
                            if($current_image != "")
                            {
                                //Display the Image
                                ?>
            <img class='img d-block mb-4' src="../images/category/<?php echo $current_image; ?>">
            <?php
                            }
                            else
                            {
                                //Display Message
                                echo "<div class='text-danger mb-4'>Image Not Added.</div>";
                            }
                        ?>
        </div>

        <div class="form-group">
            <label for="image">
                Image
            </label>
            <input type="file" name="image" class="form-control">

        </div>
        <a href="/admin" class="btn btn-secondary">Cancel</a>

        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>" >
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" name="submit" value="Submit" class="btn btn-primary">Save</button>

    </form>
</div>
<?php 

if(isset($_POST['submit'])){
    $category_name = $_POST['name'];
    $id = $_POST['id'];
    $current_image = $_POST['current_image'];
    if(isset($_FILES['image']['name'])){
        $category_img = $_FILES['image']['name'];
        if($category_img != ''){
            $ext = end(explode('.', $category_img));
            $category_img = "Category_".rand(000, 999).'.'.$ext;

            $source_path = $_FILES['image']['tmp_name'];
        
            $destination_path='../images/category/'.$category_img;
        
            $upload = move_uploaded_file($source_path,$destination_path);

            if($upload ==false){
                //SEt message
                $_SESSION['upload'] = "<div class='text-danger'>Failed to Upload Image. </div>";
                //Redirect to Add CAtegory Page
                header('location:/admin/add-category.php');
                //STop the Process
                die();
           }

           if($current_image !=""){
               $remove_path = "../images/category/".$current_image;

               $remove = unlink($remove_path);

               if($remove==false){
                   $_SESSION['failed-remove'] = "<div class='text-danger'>Failed to remove current Image.</div>";
                   header('location:/admin/manage-category.php');
                   die();//Stop the Process
               }
           }
        }
        else{
            $category_img = $current_image;
        }

    }else{
        $category_img = $current_image;
    }
         $sql2 = "UPDATE category SET category_name='$category_name',category_img='$category_img' WHERE id='$id'";
          $res2 = mysqli_query($conn, $sql2);
          if($res2==true)
          {
              //Category Updated
              $_SESSION['update'] = "<div class='text-success'>Category Updated Successfully.</div>";
              header('location:/admin/manage-category.php');
          }
          else
          {
              //failed to update category
              $_SESSION['update'] = "<div class='text-danger'>Failed to Update Category.</div>";
              header('location:/admin/manage-category.php');
          }
}


?>



<?php include("./includes/footer.php") ?>
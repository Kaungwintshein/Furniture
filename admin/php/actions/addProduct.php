<?php 
echo $_SESSION['add'];
include "../config/config.php";
if(isset($_POST['submitBtn'])){
    $product_name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $detail = $_POST['description'];
    $category_type = $_POST['category_type'];

    if(isset($_FILES['image']['name'])){
        $image_name = $_FILES['image']['name'];

        if($image_name != ''){
            $ext = end(explode('.', $image_name));
            $image_name = "Product_".rand(000, 999).'.'.$ext;

            $source_path = $_FILES['image']['tmp_name'];
            
            $destination_path='../../upload/'.$image_name;
            
            $upload = move_uploaded_file($source_path,$destination_path);
            
            if($upload ==false){
                $_SESSION['upload'] = "<div class='text-danger'>Failed to Upload Image. </div>";
                header('location: /admin/php/actions/addCategory.php');
                die();
            }
        }else{
            $image_name="";
        }
        
        
    }

    $sql = "INSERT INTO product(product_name,price,detail,category_type,img,created_date) VALUES ('$product_name','$price','$detail','$category_type','$image_name',now())";

    $res = mysqli_query($conn,$sql);

    if($res){
        $_SESSION['add'] = "<div class='text-success'>Product Added Successfully.</div>";
        header('location: /admin/table-basic.php');

    }else{
        $error = mysqli_error($conn);
        $_SESSION['add'] = "<div class='text-danger'>Failed to Add Product.$error</div>";
        //header('location: /admin/index.php');
    }


}

?>
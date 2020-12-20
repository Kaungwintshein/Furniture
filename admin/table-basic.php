<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table - basic</title>
    <?php 
        include "php/includes/head.php";
        include "php/includes/script.php";
        include "php/config/config.php";
    ?>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php include 'php/includes/sidebar.php';  ?>


        <!------------------ Page Content  ---------------->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                </div>
            </nav>

            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div style="overflow-x:auto;" class="col-lg-12 col-sm-12">
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addProduct">
                            Create New
                        </button>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Price</th>
                                        <th scope="col">Product type</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Created Date</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Show Data -->
                                    <?php 
                                        $products = mysqli_query($conn,"SELECT * FROM product");
                                        foreach($products as $product){
                                            echo "<tr>";
                                            echo "<td>{$product['id']} </td>";
                                            echo "<td>{$product['product_name']} </td>";
                                            echo "<td>{$product['price']} </td>";
                                            echo "<td>{$product['category_type']} </td>";
                                            echo "<td>{$product['detail']} </td>";
                                            echo "<td>{$product['img']} </td>";
                                            echo "<td>{$product['created_date']} </td>";
                                            echo "<td><button type='submit' class='btn btn-danger' onclick='delete_data({$product['id']},\"php/actions/productDel.php\")'>DELETE</button></td>";
                                            //echo "<td><button type='button' class='btn btn-primary mb-3' onclick='editProduct({$product['id']},{$product['category_id']},\"NAme\")'>EDIT</button></td>";
                                            //echo "<td><a href='/admin/modal.php?id={$product['id']}' class='btn btn-primary mb-3 editbtn'>Edit</a></td>";
                                            echo "<td><button type='submit' class='btn btn-primary mb-3 editbtn'>Edit</button></td>";
                                            echo "</tr>";
                                        }
                                    ?>
    


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->

        </div>
    </div>

<script>
        $(".editbtn").on("click",function(){
            $("#editData").modal("show");

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            });
            $("#product_id").val(data[0]);
            $("#update_product_name").val(data[1]);
            $("#update_product_price").val(data[2]);
            $("#update_category_type").val(data[3]);
            $("#update_description").val(data[4]);
            $("#update_image").val(data[5]);
        });

        // function editProduct(id,cat_id,pd_name){  
        //     //$(".editbtn").on("click",function(){
        //         $("#editData").modal("show");

        //         var id = id;
        //         var cat_id = cat_id;
        //         var pd_name = pd_name;
        //         $.ajax({
        //             type: 'POST',
        //             url: "/admin/table-basic.php",
        //             data: {
        //                 "id":id,
        //                 "cat_id": cat_id,
        //                 "pd_name": pd_name,
        //             },
        //             success: function(data){
        //             },
        //         });
        //     //});
        // };
    </script>

<?php 
    include "./modal.php";
?>
</body>
</html>
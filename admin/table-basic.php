<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php 
        include "php/includes/head.php";
        include "php/includes/script.php";
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
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                            Create New
                        </button>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Price</th>
                                        <th scope="col">Product type</th>
                                        <th scope="col">Images</th>
                                        <th scope="col">Created Date</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php //Show All Here ?>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->

        </div>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="product_name">Product Name or Product Code</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" aria-describedby="emailHelp" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="product_price">Price</label>
                        <input type="text" class="form-control" id="product_price" name="product_price" required>
                    </div>
                    <div class="form-group">
                        <label for="product_type">Product Type</label>
                        <select class="form-control" id="product_type" name="product_type" required>
                            <option>Men</option>
                            <option>Women</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" class="form-control-file" id="image_upload" name="image_upload" required>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submitBtn" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</div>
</body>
</html>
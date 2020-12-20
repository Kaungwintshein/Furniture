<?php include "php/config/config.php" ?>
<!-- ################################## Create Product ############################################# -->
<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/actions/addProduct.php" method="POST" enctype="multipart/form-data">
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
                        <label for="product_type">Category Type</label>
                        <select class="form-control" id="category_type" name="category_type" required>
                            <option selected>Chair</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Upload Image</label>
                        <input type="file" class="form-control-file" id="image_upload" name="image" required>
                    </div>

                    <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="Description"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submitBtn" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</div>

<!-- ################################## Create Category ############################################# -->
<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/actions/addCategory.php" method="POST">
                    <div class="form-group">
                        <label for="category_name">Category</label>
                        <input type="text" class="form-control" id="category_name" name="category_name" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submitBtn" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</div>

<!-- ################################## Create User ############################################# -->
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/actions/userAdd.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="product_type">User Type</label>
                        <select class="form-control" id="user_type" name="user_type" required>
                            <option selected>Admin</option>
                            <option>User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_name">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="product_price">Password</label>
                        <input type="text" class="form-control" id="user_password" name="user_password" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submitBtn" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</div>

<!-- ################################## Edit Product ############################################# -->
<div id="editData" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="php/action/productUpdate.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id" id="product_id">
                <label for="product_name">Product Name or Product Code</label>
                <input type="text" class="form-control" id="update_product_name" name="product_name" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <input type="hidden" name="update_product_id" id="update_product_id">
                <label for="product_price">Price</label>
                <input type="text" class="form-control" id="update_product_price" name="product_price" required>
            </div>
            <div class="form-group">
                <label for="product_type">Category Type</label>
                <select class="form-control" name="category_id" required>
                    <option value=""></option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" class="form-control-file" id="update_image" name="image" required>
            </div>

            <div class="form-group">
                <textarea id="update_description" name="update_description" class="form-control"></textarea>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="submitBtn" class="btn btn-primary">Update</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<!-- ################################## Edit Category ############################################# -->
<div class="modal fade" id="editCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/actions/categoryEdit.php" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="category_id" id="update_category_id">
                        <label for="category_name">Category</label>
                        <input type="text" class="form-control" id="update_category_name" name="category_name" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submitBtn" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</div>

<!-- ################################## Edit User ############################################# -->
<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="php/actions/userEdit.php" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="user_id" id="update_user_id">
                        <label for="category_name">Username</label>
                        <input type="text" class="form-control" id="update_username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="category_name">Password</label>
                        <input type="text" class="form-control" id="update_user_password" name="" disabled>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button  type="submit" name="updatecategory" class="btn btn-primary">Update User Info</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
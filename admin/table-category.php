<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table - category</title>
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
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addCategory">
                            Create New
                        </button>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category Name</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- // Show Data -->
                                    <?php 
                                        $categories = mysqli_query($conn,"SELECT * FROM category");
                                        foreach($categories as $category){
                                            echo "<tr>";
                                            echo "<td>{$category['id']} </td>";
                                            echo "<td>{$category['category_name']} </td>";
                                            echo "<td><button type='submit' class='btn btn-danger' onclick='delete_data({$category['id']},\"php/actions/categoryDel.php\")'>DELETE</button></td>";
                                            echo "<td><button type='submit' class='btn btn-primary mb-3 editBtn'>Edit</button></td>";
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

<?php 
    include "./modal.php";
?>
<script>
    $('.editBtn').on("click",function(){
        $('#editCategory').modal("show");
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        });
        $("#update_category_id").val(data[0]);
        $("#update_category_name").val(data[1]);
    })

</script>
</body>
</html>
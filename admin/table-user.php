<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table - User</title>
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
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addUser">
                            Add User
                        </button>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">User Type</th>
                                        <th scope="col">Created Date</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Show Data -->
                                    <?php 
                                        $query = "select * from auth order by id desc";
                                        $go_query = mysqli_query($conn,$query);
                                        foreach($go_query as $row){
                                            $id = $row['id'];
                                            $username = $row['username'];
                                            $password = md5($row['password']);
                                            $role = $row['role'];
                                            $lastupdated = $row['created_date'];
                                            echo "<tr>";
                                            echo "<td>{$id}</td>";
                                            echo "<td>{$username}</td>";
                                            echo "<td>{$password}</td>";
                                            echo "<td>{$role}</td>";
                                            echo "<td>{$lastupdated}</td>";
                                            //echo "<td><a href='user-list.php?action=delete&cid={$id}'><i class='fa fa-trash' style='color:red;cursor:pointer;'></i></a></td>";
                                            //echo "<td><button type='submit' class='btn btn-primary' onclick='OpenModel({$id},{$username})'>EDIT</button></td>";
                                            echo "<td><button class='btn btn-danger' onclick='delete_data({$id},\"php/actions/userDel.php\")'>DELETE</button></td>";
                                            echo "<td><button type='submit' class='btn btn-primary editBtn'>EDIT</button>";
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
        $("#editUser").modal("show");

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function(){
            return $(this).text();
        });

        $('#update_user_id').val(data[0]);
        $('#update_username').val(data[1]);
        $('#update_user_password').val(data[2]);
        $('#update_user_type').val(data[3]);
        $('#created_date').val(data[4]);
    })
</script>
</body>
</html>
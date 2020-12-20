<?php
    // /include "php/config/auth.php";
    include "php/config/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <?php include dirname(__FILE__).'/php/includes/head.php'; ?>


  <!-- library -->
  <link rel="stylesheet" href="/public/dist/css/grid.css">
  <link rel="stylesheet" href="/public/css/index.css">
  <script src="/public/Js/shop.js"></script>
</head>

<body>


    <!--********************************** Kaung Htet Paing *************************************** -->
    <?php include dirname(__FILE__)."/php/includes/header.php"; ?>

    

    <!-- cart -->
    <div class="container cart">
        <div class="row" id="row">
            <?php
                $result = mysqli_query($conn,"SELECT * FROM product");
                $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
                foreach($products as $product):
            ?>
                <div class="col-lg-4 col-md-6 mt-2 mb-2" >
                    <div class='cart-image-container'>
                        <img src="admin/upload/<?php echo $product['img'] ?>" class='img-fluid' alt="">
                        <div class="cart-icon d-flex">
                            <div class="m-auto d-flex justify-content-around">
                                <span class='d-flex icon-img'>
                                    <i class="fas fa-plus m-auto"></i>
                                </span>
                                <span class='d-flex icon-img view' onclick="showModal(<?php echo $product['id'] ?>)"> 
                                    <i class="far fa-eye  m-auto "></i>
                                </span>
                                <span class='d-flex icon-img'>
                                    <i class="far fa-heart m-auto"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class='text-center p-2' id="<?php echo $product['id'] ?>" >
                        <h2><?php echo $product['product_name'] ?></h2>
                        <span class='text-muted text-capitalize'>Art</span>
                        <h2 class='mt-2'>$ <?php echo $product['price'] ?></h2>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



<!-- MODAL CENTER -->
<!-- Button trigger modal -->


<!-- Modal -->
<div id="modal">

</div> 
<!-- <div class="modal fade" id="modalShow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title lore </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src=${modalData.image} class='img-fluid' alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center pb-2">
                    <h3>${modalData.name}</h3>
                    <span class='mt-2 mb-2'>$ ${modalData.price.toFixed(2)}</span>
                    <p class='text-muted'>${modalData.discription}</p>
                    <div class="d-flex form align-items-center mb-3">
                        <input type="text" class="form" value="1">
                        <button type='submit' class='button ml-3 text-uppercase'>add to cart</button>
                    </div>
                    <div class="d-flex"><span class='mr-3'>Category: </span><a href="#" class='text-dark'>Style</a>
                    </div>
                    <div class="d-flex"><span class='mr-3'>Tags: </span><a href="#" class='text-dark'>furniture,
                            gallery,
                            m-home</a></div>
                </div>
                <div class='cross mt-4 d-flex justify-content-center align-items-center'>
                    <span></span>
                </div>
            </div>
            </div>;
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
  </div>
</div> -->
<!-- end modal -->



<?php 


// ----------------Footer-------------
include dirname(__FILE__).'/php/includes/footer.php' ;
// ----------------Scripts-------------
// include dirname(__FILE__).'/php/includes/script.php';
?>

    <script src="/public/Js/header.js"></script>
    <!-- <script src="/public/Js/shop.js"></script> -->
    <!-- <script type="text/javascript">
        // container_row.addEventListener("click", (e) => {
        // if (e.target.classList.contains("view")) {
        //     modalCard(e.target.id);
        //     modal.classList.add("active");
        //     }
        // });
        // modal.addEventListener("click", (e) => {
        // if (e.target.classList.contains("cross")) {
        //     modal.classList.remove(["active"]);
        // }
        // if (e.target !== e.currentTarget) return;
        // modal.classList.remove(["active"]);
        // });

        // $('.view').on("click",function(){
        //     var productId = $(this).data('id');
        //     $(".modal-body #productId").val(productId);
        //     $('#modalShow').modal("show");
        // })


        // $(".view").on("click",function(){
        //     $("#modalShow").modal("show");
        // });
        
        // function showModal(id){
        //     $("#modalShow").modal("show");
        //     var obj = <?php //echo json_encode($products); ?> 
        //     console.log(obj);
        //     console.log(id);


            
        // } //end


</script> -->

<script type="text/javascript">
 var obj = <?php echo json_encode($products); ?>
</script>

<script src="/public/Js/shop.js" type="text/javascript"></script>
</body>

</html>
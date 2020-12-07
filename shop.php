<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <?php include dirname(__FILE__).'/php/includes/head.php'; ?>


  <!-- library -->
  <link rel="stylesheet" href="/public/dist/css/grid.css">
  <link rel="stylesheet" href="/public/css/index.css">
</head>

<body>
    <!--********************************** Kaung Htet Paing *************************************** -->
    <?php include dirname(__FILE__)."/php/includes/header.php" ; ?>

    

    <!-- cart -->
    <div class="container cart">
        <div class="row" id="row">

        </div>
    </div>

    <!-- modal box -->
    <div id="modal">

    </div>
<!--********************************** Kaung Wint Shein *************************************** -->
<?php 


// ----------------Footer-------------
include dirname(__FILE__).'/php/includes/footer.php' ;
// ----------------Scripts-------------
// include dirname(__FILE__).'/php/includes/script.php';
?>

    <script src="/public/Js/header.js"></script>
    <script src="/public/Js/shop.js"></script>
</body>

</html>
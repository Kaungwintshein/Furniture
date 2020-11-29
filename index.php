<!DOCTYPE html>
<html lang="en">

<head>
  <title>Furniture store</title>
<<<<<<< HEAD:index.php
  <!-- head css links -->
  <link rel="stylesheet" href="/public/css/style.css">
  <?php include dirname(__FILE__).'/php/includes/head.php'; ?>
  <!-- library -->
  <link rel="stylesheet" href="/public/dist/css/grid.css">
  <link rel="stylesheet" href="/public/css/index.css">
  
=======
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Furniture store</title>
  <link rel="stylesheet" href="./public/css/bootstrap.min.css">
  <link rel="stylesheet" href="./public/css/style.css">
  <link rel="stylesheet" href="./public/Css/main.css">
  <link rel="stylesheet" href="./public/Css/grid.css">

>>>>>>> 4c926ff491bf5d2ba37b7318c0a8afe6399ede8c:index.html
</head>

<body>

  <!--********************************** Kaung Htet Paing *************************************** -->
  <nav class="nav-container">
    <div class="logo">
      <a href="#" class='text-uppercase text-dark logo-link-desktop'>
        <img src="./images/heart.svg" alt="logo">
        Whitlist
      </a>
      <a href="#" class='text-uppercase text-dark logo-link-phone'>
        <img src="./images/logo.svg" alt="logo" class='logo-img'>
      </a>
      <div class='navbar-icon'>
        <span class='logo-icon'></span>
        <span class='logo-icon'></span>
        <span class='logo-icon'></span>
      </div>
    </div>
    <ul class="nav">
      <li>
        <a href="#" class="text-dark text-capitalize link link-active">Home</a>
      </li>
      <li>
        <a href="#" class="text-dark text-capitalize link">Pages</a>
      </li>
      <li>
        <a href="#" class="text-dark text-capitalize link">Journal</a>
      </li>
      <li class='logo-link-desktop'>
        <a href="#" class="text-dark text-uppercase">
          <img src="./images/logo.svg" alt="logo" class='logo-img'>
        </a>
      </li>
      <li>
        <a href="/shop.html" class="text-dark text-capitalize link">Shop</a>
      </li>
      <li>
        <a href="#" class="text-dark text-capitalize link">Projects</a>
      </li>
      <li>
        <a href="#" class="text-dark text-capitalize link">Contact</a>
      </li>
    </ul>
    <div class="search-card">
      <a href="#" class="text-dark search">
        <i class="fas fa-search"></i>
      </a>
      <a href="#" class="text-dark cart-box">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-shopping-bag">
          <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <path d="M16 10a4 4 0 0 1-8 0"></path>
        </svg>
        <span class="rounded-circle bg-dark text-white"> 0</span>
      </a>
    </div>
  </nav>

  <div class="container_box">
    <div class="Slider">
      <div class="Slide Current">
        <div class="Content">
          <div class="slide_container">
            <h3 class='text-capitalize'>Lorem ipsum dolor sit amet.</h3>
            <p class='text-muted'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quos iste
              molestiae quod maxime
              fugit!</p>
            <div class='mt-3'>
              <a href="#" class='btn btn-dark p-2 text-uppercase d-inline mr-4'>view more</a>
              <span class='h5'>Only $79.00</span>
            </div>

          </div>
          <img src="./images/slider-img-1.jpg" class="slider_img" alt="slider">
        </div>
      </div>
      <div class="Slide">
        <div class="Content">
          <div class="slide_container">
            <h3 class='text-capitalize'>Lorem ipsum dolor sit amet.</h3>
            <p class='text-muted'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quos iste
              molestiae quod maxime
              fugit!</p>
            <div class='mt-3'>
              <a href="#" class='btn btn-dark p-2 text-uppercase d-inline mr-4'>view more</a>
              <span class='h5'>Only $79.00</span>
            </div>
          </div>
          <img src="./images/slider-img-2.jpg" class="slider_img" alt="slider">
        </div>
      </div>
      <div class="Slide">
        <div class="Content">
          <div class="slide_container">
            <h3 class='text-capitalize'>Lorem ipsum dolor sit amet.</h3>
            <p class='text-muted'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quos iste
              molestiae quod maxime
              fugit!</p>
            <div class='mt-3'>
              <a href="#" class='btn btn-dark p-2 text-uppercase d-inline mr-4'>view more</a>
              <span class='h5'>Only $79.00</span>
            </div>
          </div>
          <img src="./images/slider-img-3.jpg" class="slider_img" alt="slider">
        </div>
      </div>
    </div>

    <div class="buttons">
      <button id="prev" class='current'></button>
      <button id="middle"></button>
      <button id="next"></button>
    </div>
  </div>
  <!-- **********************************Sai Saing Hein*************************************** -->

<div class="container-fluid" id="container-fluid-me">
  <div class="d-flex img_hover_content">
    <div class="img_showcase_container">
        <div class="container-fluid img_hover_text">
          <h1>Elle Decoration</h1>
          <p>Art, Handmade</p>
        </div>
        <img class="img-fluid" src="/images/portfolio-img-01.jpg" alt="">
      
    </div>
    
    <div class="img_showcase_container">
        <div class="container-fluid img_hover_text">
          <h1>Elle Decoration</h1>
          <p>Art, Handmade</p>
        </div>
        <img class="img-fluid" src="/images/portfolio-img-02.jpg" alt="">
      
    </div>

    <div class="img_showcase_container">
        <div class="container-fluid img_hover_text">
          <h1>Elle Decoration</h1>
          <p>Art, Handmade</p>
        </div>
        <img class="img-fluid" src="/images/portfolio-img-03.jpg" alt="">
      
    </div>

    <div class="img_showcase_container">
        <div class="container-fluid img_hover_text">
          <h1>Elle Decoration</h1>
          <p>Art, Handmade</p>
        </div>
        <img class="img-fluid" src="/images/portfolio-img-04.jpg" alt="">
      
    </div>
  </div>
</div>

<div class="container-fluid" id="container-fluid-me">
  <div class="d-flex img_hover_content">
    <div class="img_showcase_container">
        <div class="container-fluid img_hover_text">
          <h1>Elle Decoration</h1>
          <p>Art, Handmade</p>
        </div>
        <img class="img-fluid" src="/images/portfolio-img-05.jpg" alt="">
      
    </div>
    
    <div class="img_showcase_container">
        <div class="container-fluid img_hover_text">
          <h1>Elle Decoration</h1>
          <p>Art, Handmade</p>
        </div>
        <img class="img-fluid" src="/images/portfolio-img-06.jpg" alt="">
      
    </div>

    <div class="img_showcase_container">
        <div class="container-fluid img_hover_text">
          <h1>Elle Decoration</h1>
          <p>Art, Handmade</p>
        </div>
        <img class="img-fluid" src="/images/portfolio-img-07.jpg" alt="">
      
    </div>

    <div class="img_showcase_container">
        <div class="container-fluid img_hover_text">
          <h1>Elle Decoration</h1>
          <p>Art, Handmade</p>
        </div>
        <img class="img-fluid" src="/images/portfolio-img-08.jpg" alt="">
      
    </div>
  </div>
</div>
  <!--**********************************sithuyannaing*************************************** -->
  <section class="container_6 clear_fix">
    <div class="row" id="rower">
      <div class="col span_1_of_3">
        <div class="work_step">
          <div>1.</div>
          <strong>Home Delivery</strong>
          <p>nec condimentum ligula. Proin acer blandit eros. Sed enim felis varius.</p>
        </div>
      </div>
      <div class="col span_1_of_3 ">
        <div class="work_step">
          <div>2.</div>
          <strong>Money Back</strong>
          <p>Maecenas nec condimentum ligula. Proin acer blandit eros. Sed enim felis varius.</p>
        </div>
      </div>
      <div class="col span_1_of_3  ">
        <div class="work_step">
          <div>3.</div>
          <strong>On-line Purchase</strong>
          <p>Maecenas nec condimentum ligula. Proin acer blandit eros. Sed enim felis varius.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="container_7">
    <div>
      <img src="images/m-home-img-1.jpg" alt="home-item1" class="con7_img1">
    </div>

    <div class="con7">
      <p>
        SHOWROOM OPENED<br>
        <i>Our first shop</i><br>
        At vero eos et accusamus et iusto odi odgnissimos ducimus qui blanditiis praesentium volup tatum deleniti
        atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
        sunt in culpa qui officia deserunt mollitia animi.
      </p>
      <div>
        <button>Find Funiture</button>
      </div>
    </div>


    <div class="con7">
      <p>FEATURED IN KITCHEN DESIGN<br>
        <i>Everything Goes Online</i><br>
        At vero eos et accusamus et iusto odi odgnissimos ducimus qui blanditiis praesentium volup tatum deleniti
        atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
        sunt in culpa qui officia deserunt mollitia animi
      </p>
      <div class="con7_data">
        <div>
          <p><i>99+</i><br>Combined with a handful model.</p>
        </div>
        <div>
          <p><i>1,230</i><br>Combined with a handful model.</p>
        </div>
        <div>
          <p><i>546</i><br>Combined with a handful model.</p>
        </div>
        <div>
          <p><i>412+</i><br>Combined with a handful model.</p>
        </div>
      </div>
    </div>
    <div>
      <img src="images/m-home-img-2.jpg" alt="home-item2" class="con7_img2">
    </div>
  </section>

  <section class="container_8 clear_fix">
    <div id="rower">
      <p>FIND YOUR FAVORITE</p>
      <h2>Hot New Arrivals</h2>
      <p style="margin-bottom: 4%;">Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
    </div>

    <div class="row" id="rower">
      <div class="col span_1_of_4">
        <img src="images/product-1-img-1.jpg" alt="product1">
        <div class="product_price">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no<br>
            <i>$310.00</i>
          </p>
          
        </div>
      </div>
      <div class="col span_1_of_4">
        <img src="images/product-2-img-1.jpg" alt="product2">
        <div class="product_price">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no<br>
            <i>$310.00</i>
          </p>
          
        </div>
      </div>
      <div class="col span_1_of_4">
        <img src="images/product-3-img-1.jpg" alt="product3">
        <div class="product_price">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no<br>
            <i>$310.00</i>
          </p>
          
        </div>
      </div>
      <div class="col span_1_of_4">
        <img src="images/product-4-img-1.jpg" alt="product4">
        <div class="product_price">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no<br>
            <i>$310.00</i>
          </p>
          
        </div>
      </div>
    </div>
    <div class="row" id="rower">
      <div class="col span_1_of_4">
        <img src="images/product-5-img-1.jpg" alt="product5">
        <div class="product_price">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no<br>
            <i>$310.00</i>
          </p>
          
        </div>

      </div>
      <div class="col span_1_of_4">
        <img src="images/product-6-img-1.jpg" alt="product6">
        <div class="product_price">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no<br>
            <i>$310.00</i>
          </p>
          
        </div>
      </div>
      <div class="col span_1_of_4">
        <img src="images/product-7-img-1.jpg" alt="product7">
        <div class="product_price">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no <br>
            <i>$310.00</i>
          </p>
          
        </div>
      </div>
      <div class="col span_1_of_4">
        <img src="images/product-8-img-1.jpg" alt="product8">
        <div class="product_price">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no<br>
            <i>$310.00</i>
          </p>
          
        </div>
      </div>
    </div>
    <div class="row" id="rower">
      <div class="col span_1_of_4">
        <img src="images/product-9-img-1.jpg" alt="product9">
        <div class="product_price">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no<br>
            <i>$310.00</i>
          </p>
          
        </div>
      </div>
      <div class="col span_1_of_4">
        <img src="images/product-10-img-1.jpg" alt="product10">
        <div class="product_pr  ice">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no<br>
            <i>$310.00</i>
          </p>
          
        </div>
      </div>
      <div class="col span_1_of_4">
        <img src="images/product-2-img-1.jpg" alt="product11">
        <div class="product_price">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no<br>
            <i>$310.00</i>
          </p>
          
        </div>
      </div>
      <div class="col span_1_of_4">
        <img src="images/product-1-img-1.jpg" alt="product12">
        <div class="product_price">
          <p><span>Rack Small</span><br>
            Etiam mauris nulla, sodales no<br>
            <i>$310.00</i>
          </p>
          
        </div>
      </div>
    </div>
  </section>

  <section class="container_9">
    <div class="row" id="rower">
      <div class="col span_1_of_5">
        <i class="fas fa-gift" style="font-size: 2em;"></i>
        <div class="con9">
          <i>Quality</i>
          <p>At vero eos et accusamus et iusto odio dignissi mos ducimus qui blanditiis praesentium</p>
        </div>
      </div>
      <div class="col span_1_of_5">
        <i class="far fa-heart" style="font-size: 2em;"></i>
        <div class="con9">
          <i>Office</i>
          <p>At vero eos et accusamus et iusto odio dignissi mos ducimus qui blanditiis praesentium</p>
        </div>
      </div>
      <div class="col span_1_of_5">
        <i class="fas fa-home" style="font-size: 2em;"></i>
        <div class="con9">
          <i>Paint & Outdoor</i>
          <p>At vero eos et accusamus et iusto odio dignissi mos ducimus qui blanditiis praesentium</p>
        </div>
      </div>
      <div class="col span_1_of_5">
        <i class="fas fa-feather" style="font-size: 2em;"></i>
        <div class="con9">
          <i>Fragrance</i>
          <p>At vero eos et accusamus et iusto odio dignissi mos ducimus qui blanditiis praesentium</p>
        </div>
      </div>
      <div class="col span_1_of_5">
        <i class="fas fa-award" style="font-size: 2em;"></i>
        <div class="con9">
          <i>Colors</i>
          <p>At vero eos et accusamus et iusto odio dignissi mos ducimus qui blanditiis praesentium</p>
        </div>
      </div>
    </div>

  </section>




  <!-- review slider -->
  <div class="slider_bg">
    <section class="slider section_slider">
      <div class="reviews">
        <h2><span>/</span>reviews</h2>
      </div>
      <div class="slide-container"> </div>
      <!-- buttons -->
      <!-- prev btn -->
      <button class="slider_button prev-btn">
        <i class="fas fa-chevron-left"></i>
      </button>
      <!-- next button -->
      <button class="slider_button next-btn">
        <i class="fas fa-chevron-right"></i>
      </button>
    </section>
  </div>

  <div class="scroll-nav">
    <i class="fas fa-chevron-up"></i>
  </div>


  </div>
  </div>
  </div>



  <!--********************************** Kaung Wint Shein *************************************** -->
  <?php 

<<<<<<< HEAD:index.php
    // ----------------Footer-------------
    include dirname(__FILE__).'/php/includes/footer.php' ;
=======
  <script src="./public/Js/jquery-3.5.1.min.js"></script>
  <script src="./public/Js/bootstrap.bundle.min.js"></script>
  <script src="./public/Js/fontawsome.js"></script>
  <script src="./public/Js/header.js"></script>
  <script src="./public/Js/main.js"></script>
>>>>>>> 4c926ff491bf5d2ba37b7318c0a8afe6399ede8c:index.html

    // ----------------Scripts-------------
    // include dirname(__FILE__).'/php/includes/script.php';
  ?>
    <script src="/public/Js/main.js"></script>
</body>

</html>
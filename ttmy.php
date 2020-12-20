<?php
    $cutomer = "
        CREATE TABLE customer(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        INDEX(name) 
    );";

    $product = "
    CREATE TABLE products(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        price DOUBLE,
        balance INT,
        INDEX(name)
    )";

    $orders = "
    CREATE TABLE orders(
        id INT AUTO_INCREMENT PRIMARY KEY,
        customer_id INT,
        date DATE,
        INDEX(date),
        FOREIGN KEY (customer_id) REFERENCES customers(id)
    )";

    $order_product = "
    CREATE TABLE order_product(
        order_id INT,
        product_id INT,
        quantity INT,
        price DOUBLE,
        PRIMARY KEY(order_id, product_id),
        FOREIGN KEY (order_id) REFERENCES orders(id),
        FOREIGN KEY (product_id) REFERENCES products(id),
    )";
?>


    <!-- modal box -->
    <?php
        $result = mysqli_query($conn,"SELECT * FROM product");
        while($row = mysqli_fetch_assoc($result)):
    ?>
    <div id="modal">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="admin/upload/<?php echo $row['img'] ?>" class='img-fluid' alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center pb-2">
                    <h3><?php echo $row['product_name'] ?></h3>
                    <span class='mt-2 mb-2'>$ <?php echo $row['price'] ?></span>
                    <p class='text-muted'><?php echo $row['description'] ?></p>
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
        </div>
    </div>
    <?php endwhile; ?>

     <!--id ="<?php //echo $row['id'] ?>"-->
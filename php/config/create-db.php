<?php


class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;

        public $item;
        public $category;
        // public $order;
        public $auth;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "Newdb",
        $item = "Productdb",
        $category = "Productdb",
        // $order = "Productdb",
        $auth = "ProductDb",
        $servername = "localhost",
        $username = "root",
        $password = "123456"
    )
    {
      $this->dbname = $dbname;
      $this->item = $item;
      $this->category = $category;
    //   $this->order = $order;
      $this->auth = $auth;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        // TBALE1
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $item
                            (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             item_name VARCHAR (255) NOT NULL,
                             category_id INT NOT NULL,
                             price 	DECIMAL (10,2)	 NOT NULL,
                             detail VARCHAR (255) NOT NULL,
                             img VARCHAR (255) NOT NULL,
                             created_date DATETIME NOT NULL
                            );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

        }else{
            return false;
        }


        // TBALE2
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $category
                            (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            category_img VARCHAR (255) NOT NULL,
                             category_name VARCHAR (255) NOT NULL
                            );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

        }else{
            return false;
        }

        // TBALE3
        // if(mysqli_query($this->con, $sql)){

        //     $this->con = mysqli_connect($servername, $username, $password, $dbname);

        //     // sql to create new table
        //     $sql = " CREATE TABLE IF NOT EXISTS $order
        //                     (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             
        //                     );";

        //     if (!mysqli_query($this->con, $sql)){
        //         echo "Error creating table : " . mysqli_error($this->con);
        //     }

        // }else{
        //     return false;
        // }

        // TBALE4
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $auth
                            (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             role VARCHAR (255) NOT NULL,
                             username VARCHAR (255) NOT NULL,
                             email VARCHAR (255) NOT NULL,
                             password VARCHAR (255) NOT NULL,
                             created_date DATETIME NOT NULL
                            );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

        }else{
            return false;
        }


    }

}
?>

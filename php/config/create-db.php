<?php



class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename1;
        public $tablename2;
        public $tablename3;
        public $con;


        // class constructor
    public function __construct(
        $dbname = "Newdb",
        $tablename1 = "Productdb",
        $tablename2 = "Productdb",
        $tablename3 = "Productdb",
        $servername = "localhost",
        $username = "root",
        $password = "123456"
    )
    {
      $this->dbname = $dbname;
      $this->tablename1 = $tablename1;
      $this->tablename2 = $tablename2;
      $this->tablename3 = $tablename3;
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
            $sql = " CREATE TABLE IF NOT EXISTS $tablename1
                            (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             course_name VARCHAR (255) NOT NULL,
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
            $sql = " CREATE TABLE IF NOT EXISTS $tablename2
                            (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             username VARCHAR (255) NOT NULL,
                             email VARCHAR (255) NOT NULL,
                             password VARCHAR (255) NOT NULL,
                             created_date DATETIME NOT NULL,
                             modified_date DATETIME NULL
                            );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

        }else{
            return false;
        }

        // TBALE3
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $tablename3
                            (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             studentname VARCHAR (255) NOT NULL,
                             email VARCHAR (255) NOT NULL,
                             Phone_number VARCHAR (255) NOT NULL,
                             NRC VARCHAR (255) NOT NULL,
                             birthday VARCHAR (255) NOT NULL,
                             course VARCHAR (255) NOT NULL,
                             address text NOT NULL
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

<?php
     require("login_connect.php");

     $sql="CREATE TABLE reg
     (id INT(6) UNSIGNED AUTO_INCREMENT;
     PRIMARY KEY,
     name VARCHAR (100) NOT NULL,
     email VARCHAR (100) NOT NULL,
     mobile VARCHAR (100) NOT NULL,
     password VARCHAR (100) NOT NULL,
     confirm password VARCHAR (100) NOT NULL,
     )";

     if($con->query($sql===TRUE))
     {
        echo"TABLE reg created successfully";
     }
     else
     {
        echo"ERROR creating table:".$con->error;

     }
     $con->close();
     ?>

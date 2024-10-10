<?php

    $Connection = mysqli_connect("127.0.0.1", "mariadb", "mariadb", "mariadb");
    
    if (!$Connection){
        echo "Sql Error Occurred" . mysqli_connect_error();
    }else{
        echo "SQL Connected Successfully";
    }
?>
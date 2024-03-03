<?php 

    $lhost = "localhost";
    $db = "adminpanel";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($lhost, $username, $password, $db);

    if (!$conn) {

        die("connection failed: ". mysqli_connect_error());
    }
    else{
        echo "Connected succesfully:";
    }


?>
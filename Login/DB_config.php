<?php
    // Creating Connection 
    $con = mysqli_connect('localhost','username','password','table_name');

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>
<?php

//server connection parameters
$servename = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test_db";

//create a connection with the database
$conn = new mysqli($servename,$username,$password,$dbname);

// check if connection was successful
if($conn->connect_error){
    // connection failed, display error
    die("connection Failed:" . $conn->connect_error);
} else {
    echo "Connection successful!";
}


?>
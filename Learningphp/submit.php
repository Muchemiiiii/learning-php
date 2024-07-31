<?php

//check if the form has been submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    if(empty($name)) {
    echo "Name is required";
    } else if (empty($email)) {
    echo "Email is required";
    }

    //Do something with the form data
    echo "Name: $name<br>";
    echo "Email: $email<br>";
}
?>
<?php
include 'config.php';

$search_name = $_POST['search_name'];
$sql = "SELECT *  FROM students WHERE first_name LIKE '%$search_name%' OR last_name LIKE '%$search_name%'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    //students found
    header("location: index.php?found=1");
} else {
    //no students found
    header("location: index.php?found=0");
}

$conn->close();
exit();
?>
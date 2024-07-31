<?php
//SQL to create a new table named 'students'
$sql ="CREATE TABLE students (
ID INT NOT NULL,
LastName VARCHAR(255) NOT NULL,
FirstName VARCHAR(255)NOT NULL,
Age INT CHECK (Age>=18),
PRIMARY KEY (ID)
)";
//Execute the query to create the table
if ($conn->query($sql)=== TRUE) {
//table creation successful
echo "Table created successfully!";
}
else{
    //Table creation failed, display error message
    echo"Error in creating table" . $conn->error;
}
//SQL to insert a new record into the 'students' table
$sql = "INSERT INTO students (ID, LastName, FirstName, Age) VALUES
('1', 'Doe', 'John',18),
('2', 'Smith', 'Jane',22),
('3', 'Brown', 'Robert',19),
('4', 'Davis', 'Emily',20);

//Execute the query to insert the data
if ($conn->query($sql)==TRUE) {

// Record insertion successful
echo "New Record created successfully!";
} else {
//Record insertion failed, display error message
echo "Error:" . $sql . "<br>" . $conn->error;
}
//SQL to select records from the 'students' table
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

//chck if the selection returned any rows
if ($result->num_rows > 0) {

//iterate over each row and display the data
while ($row = $result->fetch_assoc()) {
echo "id: " . $row["ID"] . "Name: " . $row["FirstName"] . " " .
$row["LastName"] . " " . $row["Age"] . "<br>";
}
}else {
//no record found, display a message
echo "0 results";
}
?>


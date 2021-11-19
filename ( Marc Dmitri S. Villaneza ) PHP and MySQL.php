<?php
$servername = "localhost"; 
$username = "uspfstudent";
$password = "1234567";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
   die("Connection Failed: " . $conn->connect_error); 
   }

$sql = "CREATE TABLE studenttable 
    (
    ID int NOT NULL AUTO_INCREMENT,
    Student_ID_Number VARCHAR(20),
    Student_Family_Name VARCHAR(50),
    Student_Middle_Name VARCHAR(50),
    Student_Email_Address VARCHAR(50),
    Student_Home_Address VARCHAR(250),
    Student_Mobile_Number VARCHAR(30),
    Student_Course VARCHAR(20),
    )";

if ($conn->querry($sql) === TRUE) {
    echo "Table studenttable created successfully";
    }
    else {
    echo "Error creating table: " . $conn->error;    
    }

$conn->close();
?>
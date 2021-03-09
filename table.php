<?php
$servername = "localhost";
$username = "root";
$password = "";
$tablename = $_POST["tablename"];
$dbname = $_POST["dataname"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: <br>" . $conn->connect_error);
}
echo "Connected successfully<br>";

$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Database $dbname created successfully<br>";
} else {
  echo "Error in creating database: <br>" . $conn->error;
}


$sql = "USE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Using Database $dbname<br>";
  } else {
    echo "Not using database <br>" . $conn->error;
  }



$sql = "CREATE TABLE students (
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name varchar(30) NOT NULL,
email varchar(50),
contact int(11),
address varchar(200)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table students created successfully<br>";
  } else {
    echo "Error creating table <br>" . mysqli_error($conn);
  }
  
header("Location: assignment3Q2.html");
exit();
?>
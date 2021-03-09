<?php
$servername = "localhost";
$username = "root";
$password = "";
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$dbname = "assignment2";
$tablename = "students";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection created.";
}

$sql = "INSERT INTO $tablename (name, email, contact, address)
VALUES ('$name', '$email', '$phone', '$address')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: assignment3Q2.html");
exit();

?>

<style>
  table, th, td {
  border: 1px solid black;
}

th, td {
  padding: 15px;
}
 
table {
  margin-left: 400px;
  margin-top: 30px;
}
 h2 {
   text-align: center;
   margin-top: 20px;
 }
</style>


<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "assignment2";
$tablename = "students";




$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, contact, address FROM $tablename";

$result = $conn->query($sql);

echo "<h2>Table details</h2>";

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>Email address</th><th>Telephone number</th><th>Address</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["address"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "no results to show";
}

$conn->close();
?>


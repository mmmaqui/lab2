<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM guest_list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " name: " . $row["guest_name"]. " email: " . $row["email"]. 
    " website: " . $row["website"]. " gender: " . $row["gender"]. " comment: " . $row["comment"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
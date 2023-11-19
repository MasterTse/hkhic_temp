<?php

$servername = "p3nlmysql69plsk.secureserver.net:3306";
$username = "ph16763564932";
$password = "SeeYue@@8!";
$dbname = "HKHIC";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `Medical Videos`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Title: " . $row["Title"]. " " . $row["Link"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();


?>
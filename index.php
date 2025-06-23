<?php
$servername = "mydb.c7eua8kim3y0.ap-south-1.rds.amazonaws.com"; // replace with your RDS endpoint
$username = "admin";
$password = "mypassword123";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<h2>Connected to MySQL on RDS!</h2>";

$result = $conn->query("SELECT * FROM users");
while($row = $result->fetch_assoc()) {
  echo "ID: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
}
$conn->close();
?>

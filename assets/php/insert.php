<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auction";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$Sno=$_POST["sno"];
$name=$_POST["name"];
$Role=$_POST["Role"];
$team=$_POST["team"];
$nationality=$_POST["nationality"];
$price=$_POST["price"];
$sql = "INSERT INTO players values($Sno,'$name','$Role','$team','$nationality','$price')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('New record created successfully');</script>";
  header("Location: insert.html"); // redirect to insert.html
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<style type="text/css">
		body {
			background: linear-gradient(to bottom, #0F2027, #203A43, #2C5364);
			color: #fff;
			font-family: Arial, sans-serif;
			font-size: 16px;
			margin: 0;
			padding: 0;
		}
		table {
			border-collapse: collapse;
			width: 80%;
			margin: 0 auto;
			margin-top: 50px;
			font-size: 16px;
			background-color: #fff;
			border-radius: 10px;
			overflow: hidden;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.2);

		}
		table th, table td {
			padding: 10px;
			text-align: center;
			border: none;
      color: black;
		}
		table th {
			background-color: #333;
			font-weight: bold;
			color: #fff;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
			font-family: Arial, sans-serif;
			font-size: 32px;
			color: #fff;
			text-shadow: 2px 2px #333;
		}
	</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auction";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name,Role,nationality,price FROM players where team='RCB'";
$result=$conn->query($sql);
echo "<center>";
if($result !== false && $result->num_rows > 0){
  echo"<br><br>";
  echo"<b>RCB Player Details<b><br><br>";

echo '<table border="1">
<tr>
<td>Name</td>
<td>Role</td>
<td>Nationality</td>
<td>Price</td>
</tr>';
while($row=$result->fetch_assoc())
{
  echo '<tr>
  <td>'.$row["name"].'</td>
  <td>'.$row["Role"].'</td>
  <td>'.$row["nationality"].'</td>
  <td>'.$row["price"].'</td>
  </tr>';
}
}
else{echo "no result";
}
$conn->close();
?>

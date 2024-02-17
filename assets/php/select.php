<?php
$conn=new mysqli("localhost","root","","bank");
$rollno=$_POST["rollno"];
$sql="select * from student where rollno=$rollno";
$result=$conn->query($sql);
if($result->num_rows>0)
{
echo "marks";
echo '<table border="1">;
<tr>
<td>rollno</td>
<td>marks</td>
</tr>';
$row=$result->fetch_assoc();
echo '<tr>
<td>'.$row["rollno"].'</td>
<td>'.$row["marks"].'</td>
</tr>';
}
$conn->close();
?>
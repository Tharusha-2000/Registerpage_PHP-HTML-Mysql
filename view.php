<?php
include("conn.php");
 mysqli_select_db($conn,"e");
$sql = "select * from personal_info ";
 $result=mysqli_query($conn,$sql);
if(!$result){
die("Inavlid query".mysqli_error()); }
else {
echo "<h2> Job Seekers </h2> <table border='1'> <tr>
<th>Title</th>
<th>Name</th>
<th> Gender</th>
<th> Date of Birth</th> </tr>";
while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td> ". $row['title']. "</td>"; echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['dateofbirth'] . "</td>";
echo "<form action='deletedata.php' method='post'>";
echo "<input type='hidden' name='idnum' value='".$row['id'] ."'>"; 
echo "<td><input type='submit' value='Delete' name='btndelete'></td>"; 
echo "</form>";

echo "</tr>";
}
echo "</table>";
} mysqli_close($conn);
?>
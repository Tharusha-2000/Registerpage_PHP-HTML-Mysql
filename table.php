
<?php
include("conn.php");
mysqli_select_db($conn,"e");
$sql1="CREATE TABLE personal_info(id int AUTO_INCREMENT PRIMARY KEY,
                                   title varchar(10), 
                                   name varchar(100),
                                   gender varchar(10),
                                   dateofbirth date)";

$result1=mysqli_query($conn,$sql1);

echo "<br>";

if(!$result1){
die("Invalid query".mysqli_error());

} else {

    echo "Table Created successfully"; 
}
mysqli_close($conn); 

?>
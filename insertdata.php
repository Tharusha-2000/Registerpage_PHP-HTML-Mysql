<?php
extract($_POST);
//echo $title;
include("conn.php");
mysqli_select_db($conn,"e");
$sql = "insert into personal_info (title, name, gender, dateofbirth)
       values ('$title','$name','$gender', '$bday') ";
$result=mysqli_query($conn,$sql);
 if(!$result){
    die("Inavlid query".mysqli_error());
 }
else {
    echo "Data inserted<br>";
}

header("Location: view.php");
mysqli_close($conn); 

?>
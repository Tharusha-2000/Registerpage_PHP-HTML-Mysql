<?php
extract($_POST);

include("conn.php");
mysqli_select_db($conn,"e");
if(isset($_POST['btndelete']))
{
$sql = "delete from personal_info where id='".$idnum."' ";
$result=mysqli_query($conn,$sql); 
if(!$result){
die("Inavlid query".mysqli_error($conn)); 
}
}

header("Location: view.php");

?>
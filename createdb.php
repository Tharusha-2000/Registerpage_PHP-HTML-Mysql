<?php
include("conn.php");
$result=mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS e");
echo "<br>";
if(!$result ){
    die("invalid query".mysqli_error());
}
else{
    echo "Database created";
}
mysqli_close($conn);

?>
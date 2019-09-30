


<?php  
include 'config.php'; 
$sql = "INSERT INTO movie(one, two,three,four,five,six) 
VALUES('".$_POST["one"]."', '".$_POST["two"]."', '".$_POST["three"]."', '".$_POST["four"]."', '".$_POST["five"]."', '".$_POST["six"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  



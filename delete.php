<?php  
	include 'config.php'; 
	$sql = "DELETE FROM movie WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  

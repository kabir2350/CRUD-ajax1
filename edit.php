<?php  
	include 'config.php'; 
	$id = filter_input(INPUT_POST, "id"); 
	$text = filter_input(INPUT_POST, "text");  
	$column_name = filter_input(INPUT_POST, "column_name");  
	$sql = "UPDATE movie SET ".$column_name."='".$text."' WHERE id='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	} 

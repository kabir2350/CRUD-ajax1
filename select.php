


<?php  


include 'config.php'; 

 
 $output = '';  
 $sql = "SELECT * FROM movie ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="20%">Id</th>  
                     <th width="10%">one</th>  
                     <th width="10%">two</th>
<th width="10%">three</th> 
<th width="10%">four</th> 
<th width="10%">five</th> 
<th width="10%">six</th> 					 
                     <th width="20%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM movie LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
	  
	  
	  $output .= '  
           <tr>  
                <td></td>  
                <td id="one" contenteditable></td>  
                <td id="two" contenteditable></td>
					<td id="three" contenteditable></td> 
					<td id="four" contenteditable></td> 
					<td id="five" contenteditable></td> 
					<td id="six" contenteditable></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
	  
      while($row = mysqli_fetch_array($result))  
      {  
           
		   
		   
		   $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="one" data-id1="'.$row["id"].'" contenteditable>'.$row["one"].'</td>  
                     <td class="two" data-id2="'.$row["id"].'" contenteditable>'.$row["two"].'</td> 
						<td class="three" data-id3="'.$row["id"].'" contenteditable>'.$row["three"].'</td> 
						<td class="four" data-id4="'.$row["id"].'" contenteditable>'.$row["four"].'</td> 
						<td class="five" data-id5="'.$row["id"].'" contenteditable>'.$row["five"].'</td> 
						<td class="six" data-id6="'.$row["id"].'" contenteditable>'.$row["six"].'</td> 
                     <td><button type="button" name="delete_btn" data-id7="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      
	  
	  
	  
	  
	  
	  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="one" contenteditable></td>  
					<td id="two" contenteditable></td>
					<td id="three" contenteditable></td> 
					<td id="four" contenteditable></td> 
					<td id="five" contenteditable></td> 
					<td id="six" contenteditable></td> 
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>



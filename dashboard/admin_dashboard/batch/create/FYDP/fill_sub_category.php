
<?php

// fill_sub_category.php


// include('database_connection.php');


//  echo fill_select_box($connect, $category_id);



	$conn = mysqli_connect("localhost","root","","rubric") or die("Connection failed");

// if($_POST['type'] == "category_id"){

		// $batch=$_POST['batch'];
		// echo '<script>alert("'.$batch.'")</script>';
		$query = "SELECT * FROM `rubric`  WHERE seat_no = '{$_POST['category_id']}'";

		$query = mysqli_query($conn,$query) or die("Query Unsuccessful.");

		$str = "";
		// $str .= "<option value=''>select student name</option>";
		while($row = mysqli_fetch_assoc($query)){
	
		  $str .= '<option value="'.$row["student_name"].'">'.$row["student_name"]. '</option>';
		}
	// }

	echo $str;
 ?>


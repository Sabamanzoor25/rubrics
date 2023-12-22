<?php

	$conn = mysqli_connect("localhost","root","","rubric") or die("Connection failed");

	if($_POST['type'] == ""){
		$sql = "SELECT * FROM department";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['dept_name']}'>{$row['dept_name']}</option>";
		}
	}else if($_POST['type'] == "batch"){

		
		$sql = "SELECT batch_no  FROM batch WHERE dept_name = '{$_POST['id']}'";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		$str .= "<option value=''>Select Batch</option>";
		while($row = mysqli_fetch_assoc($query)){
	
		  $str .= "<option value='{$row['batch_no']}'>{$row['batch_no']}</option>";
		}
	}

	echo $str;
 ?>
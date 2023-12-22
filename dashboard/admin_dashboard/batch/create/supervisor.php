<?php

$conn = mysqli_connect("localhost","root","","rubric") or die("Connection failed");

// if($_POST['type'] == ""){
	$sql = "SELECT * FROM `user`";

	$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

	$str = "";
	while($row = mysqli_fetch_assoc($query)){
	  $str .= "<option value='{$row['user_name']}'>{$row['user_name']}</option>";

	}	echo $str;

	?>
   
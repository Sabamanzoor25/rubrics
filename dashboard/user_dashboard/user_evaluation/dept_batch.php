<?php


	$conn = mysqli_connect("localhost","root","","rubric") or die("Connection failed");
	
session_start();
if(!ISSET($_SESSION['user_Login'])){

}

	if($_POST['type'] == ""){
		$sql = "SELECT Distinct department FROM rubric where supervisor = '$_SESSION[user_Login]' ";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['department']}'>{$row['department']}</option>";
		}
	}else if($_POST['type'] == "batch"){

		
		$sql = "SELECT distinct batch  FROM rubric WHERE department = '{$_POST['id']}'";

		$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

		$str = "";
		$str .= "<option value=''>------------Select Batch------------</option>";
		while($row = mysqli_fetch_assoc($query)){
	
		  $str .= "<option value='{$row['batch']}'>{$row['batch']}</option>";
		}
	}

	echo $str;
 ?>
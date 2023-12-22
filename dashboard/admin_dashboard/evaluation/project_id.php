

<?php

$conn = mysqli_connect("localhost","root","","rubric") or die("Connection failed");
$batch=$_POST['id'];
$dept=$_POST['dept'];
// $table_name=$_POST['dept'].'_'.$_POST['batch'];
$sql = "SELECT  Distinct project_id FROM `rubric` where batch='$batch' and department='$dept'";

	$query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
    $str = "";
    $str = "<option value=''>select project ID</option>";
	
	while($row = mysqli_fetch_assoc($query)){
	  $str .= "<option value='{$row['project_id']}'>{$row['project_id']}</option>";

	}	echo $str;












	?>

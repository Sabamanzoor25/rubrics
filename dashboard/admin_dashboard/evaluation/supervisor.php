<?php

$conn = mysqli_connect("localhost","root","","rubric") or die("Connection failed");

$batch=$_POST['batch'];
$pid=$_POST['id'];
$dept=$_POST['dept'];
// $table_name=$_POST['dept'].'_'.$_POST['batch'];
$sql = "SELECT  Distinct supervisor FROM `rubric` where project_id = '$pid' and batch='$batch' and department='$dept'";

    $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

    $str = "";
    while($row = mysqli_fetch_assoc($query)){
    //   $str .= "<option value='{$row['fyp_title']}'>{$row['fyp_title']}</option>";
      $str .= '<option value="'.$row["supervisor"].'">'.$row["supervisor"]. '</option>';
    }	
    echo $str;






?>
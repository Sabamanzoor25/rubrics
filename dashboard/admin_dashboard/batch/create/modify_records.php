<?php

$connect=mysqli_connect('localhost','root','','rubric');
// $connect=mysql_connect($host,$username,$password);
// $id=$_POST['batch'];

if(isset($_POST['edit_row']))
{
    $batch=$_POST['batch'];
 $row=$_POST['row_id'];
 $sname=$_POST['sname'];
 $seatno=$_POST['seatno'];
//  UPDATE `batch20` SET `student_name`='saba',`seat_no`='12' WHERE seat_no ='1'
 $result=mysqli_query($connect, "UPDATE `rubric` SET `student_name`='$sname',`seat_no`='$seatno'  ,`batch`='$batch' where s_id='$row'");
 echo 'success';
 exit();
}

if(isset($_POST['delete_row']))
{
    $batch=$_POST['batch']; 
 $row_no=$_POST['row_id'];
 $result= mysqli_query($connect, "DELETE FROM `rubric` WHERE s_id='$row_no'");
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
    $batch=$_POST['newbatch']; 
    $dept=$_POST['newdept'];  
 $sname=$_POST['sname'];
 $seatno=$_POST['seatno'];

 $result= mysqli_query($connect,"INSERT INTO `rubric` (`student_name`, `seat_no`,`batch`, `department`)VALUES('$sname','$seatno', '$batch', '$dept')");
 echo "success";
 exit();
}
?>
<?php


//insert.php;

if(isset($_POST["seatno"]))
{

 $connect = new PDO("mysql:host=localhost; dbname=rubric;", "root", "");
 for($count = 0; $count < count($_POST["seatno"]); $count++)
 {
  $title=$_POST['fyp_title'];
  
    $pid=$_POST['pid'];
    $batch=$_POST['batch1'];
    $dept=$_POST['dept1'];
    $supervisor=$_POST['supervisor'];
   
    
    
    $sql = "SELECT * FROM rubric WHERE fyp_title ='$title'";
    $statement1 = $connect->prepare($sql);
    $statement1->execute();
    $row  = $statement1->fetch(PDO::FETCH_ASSOC);;
    if($statement1->rowCount()>0){
      echo 'not done';
    }
    else{
       
    
      $data = array(

        ':seatno_id' => $_POST["seatno"][$count]
       );
     



  // else{

$query1="UPDATE `rubric` SET  `project_id`='$pid', `fyp_title`='$title',`supervisor`='$supervisor' where seat_no=:seatno_id";

$statement = $connect->prepare($query1);

$statement->execute($data);
 
  echo 'done';
 }



}
}

?>

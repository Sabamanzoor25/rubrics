<?php

//database_connection.php

// $connect = new PDO("mysql:host=localhost; dbname=rubric;", "root", "");

function fill_select_box($dept, $batch, $category_id )
{
    $connect = new PDO("mysql:host=localhost; dbname=rubric;", "root", "");

// echo '<script>console.log("'.$dept.'")</script>';

 $query = "SELECT * FROM `rubric` where department='$dept' and batch='$batch'";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $output = '';

 foreach($result as $row)
 {
  $output .= '<option value="'.$row["seat_no"].'">'.$row["seat_no"]. '</option>';
  
 }

 return $output;
}

?>


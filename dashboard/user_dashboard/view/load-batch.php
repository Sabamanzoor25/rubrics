
<?php

$conn = mysqli_connect("localhost","root","","rubric") or die("Connection failed");

// if($_POST['type'] == ""){
    $sql = "SHOW TABLES LIKE '2%'";

    $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

    $str = "";
    while($row = mysqli_fetch_assoc($query)){
      $str .= "<option value='{$row['Tables_in_rubric (2%)']}'>{$row['Tables_in_rubric (2%)']}</option>";

    }	echo $str;

    ?>
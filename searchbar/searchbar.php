<?php
$conn=mysqli_connect('localhost','root','','rubric');

$searchTerm = $_GET['term'];
$sql = "SELECT * FROM rubric WHERE superivisor LIKE '%".$searchTerm."%' OR  sname LIKE '%".$searchTerm."%' OR batch LIKE '%".$searchTerm."%'"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) {
  $tutorialData = array(); 
  while($row = $result->fetch_assoc()) {
   $data['id']    = $row['sno']; 
   $data['value'] = $row['superivisor'];
   array_push($tutorialData, $data);
} 
}
 echo json_encode($tutorialData);
?>


<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "rubric");
$output = '';

if(isset($_POST["export"]))
{

$batch=$_POST['batch'];
$dept=$_POST['dept'];
$year=$_POST['batch']+4;

$query  = " SELECT r.project_id, r.seat_no, r.batch, r.department, pr.proposal_weight , p.progress_first_weight ,  p.final_progress_weight,e.fst_weight, e.final_weight, pr.report_weight
from proposal_rubric as pr  
INNER join rubric as r
on r.seat_no= pr.seat_no
INNER join progress_rubric as p
on r.seat_no= p.seat_no
INNER join evaluation_rubric as e
on r.seat_no= e.seat_no where department='$dept' and batch='$batch'  ORDER BY project_id";

 $result = mysqli_query($connect, $query);
 $stmnt=$result->fetch_array();
 if(mysqli_num_rows($result) > 0)
 {
 

  $output .= '
  <table class="text-center">  
  <tr><th colspan=15> NED UNIVERSITY OF ENGINEERING AND TECHNOLOGY		<br>						
  Department of Computer and Information Systems Engineering								<br>
  Final Year Design Project (FYDP) Grading							<br>	
  Batch: ' .$batch.', Spring Semester ' .$year.' (Semester 2)</th>
   </tr>
   <th colspan=2 ></th>                                  
   <th colspan=3 > 1st Semester Evaluation</th>
   <th colspan=3 > 2nd Semester Evaluation</th>
</tr>
     <tr>
     <th >Project ID</th>
     <th>Roll No.</th>

     <th >Project Proposal</th>
     <th >Semester Progress</th>
     <th >Final Evaluation</th>

     <th >Semester Progress</th>
     <th >Final Report</th>
     <th >Final Evaluation</th>
     <th >Totoal</th>





  
   </tr>
   <tr>
  ';
  while($row = mysqli_fetch_array($result))
  {

    $total=$row["proposal_weight"]+$row["progress_first_weight"]+$row["fst_weight"]+$row["final_weight"]+$row["report_weight"]+$row["final_progress_weight"];
   $output .= '
    <tr>  
                         <td>'.$row["project_id"].'</td>  
                         <td>'.$row["seat_no"].'</td>  
                        


                         <td>'.$row["proposal_weight"].'</td>
                         <td>'.$row["progress_first_weight"].'</td>
                         <td>'.$row["fst_weight"].'</td>


                         <td>'.$row["final_weight"].'</td>
                         <td>'.$row["report_weight"].'</td>
                         <td>'.$row["final_progress_weight"].'</td>
                         <td>'.$total.'</td>

                    </tr>
   ';
  }
  
//  $filename = "batch" . $stmnt['batch'] . ".xls";
//   $output .= '</table>';

//   header('Content-Disposition: attachment; filename=\"$filename\"');
//   header('Content-Type: application/vnd.ms-excel');
$batch=$stmnt['batch'];
$filename = "Batch" . $batch . ".xls";

header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
  echo $output;
 }
}
?>
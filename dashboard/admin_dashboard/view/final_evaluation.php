<?php

$conn=mysqli_connect('localhost','root','','rubric');

$batch=$_POST['batch'];
$year=$_POST['batch']+4;
$dept=$_POST['dept'];
?>
<html >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gradinf_FYDP --FYP RUBRIC Dashboard</title>


          
 


<div class=" row-lg" style=" width:100%;" id="wrapper">

<div class="row">
  
 <div class="col-lg">
    <h2 class="title-1 m-b-25"></h2>
<div class="table-responsive table--no-card">
  
 <div class="col-lg">
 <div>
    <!-- <h2>Batch</h2> -->
    </div>


<div>
<div class=" p-4">
                                       
 <form method="post" action="../php/final_evaluation_export.php">
 <input type='hidden' class='batch'  name='batch' id='batch' value='<?php echo $batch?>'>
<input  type='hidden' class='dept' name='dept' id='dept' value='<?php echo $dept?>'>
  <div class=''>
  <button type="submit" name="export"  value="Export" class="btn btn-success btn-md ml-2  float-left">EXPORT</button>
  </div>   
</form>
 <!-- <form action='../php/pdf.php' method=POST >
 <input type='hidden' class='batch' name='batch'  id='batch' value='<?php  echo $batch?> '>
<input type='hidden' class='dept' name='dept' id='dept' value='<?php echo $dept?> '>
 <div class=''>
    <button type="submit" name="pdf"  value="pdf" class="btn btn-primary btn-md ml-2 float-left ">PDF</button>
  </div>    
  </form> -->
 
      </div>
      <br>
      <hr>
</div>


<?php

$batch=$_POST['batch'];
$dept=$_POST['dept'];
        # connect to mysql server
        # and select the database, on which
        # we will work.
        // $conn=mysqli_connect('localhost','root','','rubric');

        # Query the data from database.
        $query  = "SELECT r.project_id, r.supervisor, r.student_name,  r.seat_no, r.batch,  r.fyp_title, r.department, pr.proposal_planI,  pr.proposal_planII, pr.proposal_planIII, pr.proposal_planIV,  pr.proposal_weight , p.progress_first_planI  , p.progress_first_planII, p.progress_first_planIII,  p.progress_first_planIV,  p.progress_first_weight ,p.progress_final_planI, p.progress_final_planII, p.progress_final_planIII, p.progress_final_planIV, p.progress_final_planV, p.final_progress_weight,    e.planI,     e.planII, e.planIII, e.planIV, e.fst_weight, e.final_planI,e.final_planII, e.final_planIII, e.final_planIV, e.final_planV, e.final_weight, pr.report_planI , pr.report_planII, pr.report_planIII, pr.report_planIV, pr.report_planV, pr.report_planVI, pr.report_planVII, pr.report_planVIII, pr.report_weight
        from proposal_rubric as pr  
        INNER join rubric as r
        on r.seat_no= pr.seat_no
        INNER join progress_rubric as p
        on r.seat_no= p.seat_no
        INNER join evaluation_rubric as e
        on r.seat_no= e.seat_no where department='$dept' and batch='$batch'  ORDER BY project_id";
        $result = mysqli_query($conn,$query);

        # $arr is array which will be help ful during 
        # printing
        $arr = array();

        # Intialize the array, which will 
        # store the fetched data.
        $sname = array();
        $pid = array();
        $seatno = array();
        $batch = array();
        $project_title = array();
        $spvsr = array();
        $dept = array();


 //--------------FIRST SEMESTER------------//
//proposal evaluation

        $proposal_weight = array();
 //1st  evaluation
       
        $fst_weight = array();
   //1st progress 
       
        $progress_first_weight = array();





 //--------------SECOND SEMESTER------------//


 //report rubric
        
        $report_weight = array();


   //2nd Evaluation
      
        $final_weight = array();

   //2nd progress
 
   $final_progress_weight = array();





        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#
        #     data saving and rowspan calculation        #
        #%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%#

        # Loop over all the fetched data, and save the
        # data.
        
        while($row = mysqli_fetch_assoc($result)) {
            array_push($pid, $row['project_id']);
            array_push($sname, $row['student_name']);
            array_push($seatno, $row['seat_no']);
            array_push($batch, $row['batch']);
            array_push($project_title, $row['fyp_title']);
            array_push($spvsr, $row['supervisor']);
            array_push($dept, $row['department']);
                  //--------------FIRST SEMESTER------------//
            //proposal_evaluation

            array_push($proposal_weight, $row['proposal_weight']);

            //1st semester 
         
            array_push($fst_weight, $row['fst_weight']);

          // 1st progress evaluation
         
            array_push($progress_first_weight, $row['progress_first_weight']);





                //--------------SECOND SEMESTER------------//


     // report rubric

     array_push($report_weight, $row['report_weight']);







            //2nd Evaluation
            
            
            array_push($final_weight, $row['final_weight']);

     //2nd progress 
            
    
     array_push($final_progress_weight, $row['final_progress_weight']);





            if (!isset($arr[$row['project_id']])) {
                $arr[$row['project_id']]['rowspan'] = 0;
                $arr[$row['fyp_title']]['rowspan'] = 0;
                $arr[$row['supervisor']]['rowspan'] = 0;
                $arr[$row['department']]['rowspan'] = 0;
            }


            $arr[$row['project_id']]['printed'] = 'no';
            $arr[$row['project_id']]['rowspan'] += 1;


            $arr[$row['supervisor']]['printed'] = 'no';
            $arr[$row['supervisor']]['rowspan'] += 1;

            $arr[$row['fyp_title']]['printed'] = 'no';
            $arr[$row['fyp_title']]['rowspan'] += 1;

 
        }
         ?>


<?php
$b=$_POST['batch'];
echo "<h3 class='text-center p-4'> NED UNIVERSITY OF ENGINEERING AND TECHNOLOGY	<br>							
Department of Computer and Information Systems Engineering						<br>		
Final Year Design Project (FYDP) Grading								<br>
Batch: ".$b." , Spring Semester ".$year." (Semester 2)</h3>"?>

<form action="" method=POST>
<input type='hidden' class='batch' id='batch' value='<?php echo $row['batch']?> '>
<input type='hidden' class='dept' id='dept' value='<?php echo $row['department']?> '>
<table class="table table-hover text-center table-earning">
                                        <thead class="table-dark border ">
                                          <tr> <th colspan=5></th>
                                        
                                          <th colspan=3 class='border'>1st Semester  Evaluation</th>
                                          <th colspan=4 class='border'> 2nd Semester  Evaluation</th>
                                      </tr>
                                   
                                      <th >Project ID</th>
                                            <th >Supervisor</th>
                                            <th >Student Name</th>
                                            <th>Seat No.</th>
                                            <!-- <th>Batch No.</th> -->
                                            <th >Project Title</th>
                                            <!-- <th >Department</th> -->
                                     
                                        <th  class='border'>Propoject Proposal</th>
                                        <th  class='border'>Semester Evaluation</th>
                                        <th  class='border'>Semester progress</th>

                                        <th class='border'>Final Report</th>
                                        <th class='border'>Final Evaluation</th>
                                        <th class='border'>Final Semester progress</th>
                                        <th class='border'>total</th>
                                    </tr>
                                         
                                          
                                        </thead>
                                        <tbody id="myTable">
                                            <tr >
                                            <?php
                          for($i=0; $i < sizeof($sname); $i++) {
                              // $sno=1;
                              $project_id = $pid[$i];
                              $sno=1;
                              $fyp = $project_title[$i];
                              $supervisor=$spvsr[$i];
                              $total=$proposal_weight[$i]+$fst_weight[$i]+$progress_first_weight[$i]+$report_weight[$i]+$final_weight[$i]+$final_progress_weight[$i];
                              // $w=$weight[$i];
                              // if($w<=0){
                            
                              // echo "<tr class='text-warning'>";
                              // }
                              // else{
                                echo "<tr>";
                              // }
                              # If this row is not printed then print.
                              # and make the printed value to "yes", so that
                              # next time it will not printed.
                              if ($arr[$project_id]['printed'] == 'no') {
                                  // echo "<td rowspan='".$arr[$empName]['rowspan']."'>".$sno."</td>";
                                  echo "<td  rowspan=' ".$arr[$project_id]['rowspan']."'>".$project_id."</td>";
                                  // echo "<td  class=' px-5 py-3 text-sm font-semibold text-xs text-gray-600 dark:text-gray-400' rowspan='".$arr[$project_id]['printed']."'>".$supervisor."</td>";
                            
                                 


                                  echo "<td ' rowspan='".$arr[$project_id]['rowspan']."'>".$supervisor."</td>";
                                  $arr[$project_id]['printed'] = 'yes';
                                  
                             
                              }
                         
                              echo "<td '>".$sname[$i]."</td>";
                              echo "<td '>".$seatno[$i]."</td>";
                              // echo "<td '>".$batch[$i]."</td>";
                              // echo "<td>".$batch[$i]."</td>";





                              
                              if ($arr[$fyp]['printed'] == 'no') {
                                echo "<td   rowspan='".$arr[$fyp]['rowspan']."'>".$fyp."</td>";
                                $arr[$fyp]['printed'] = 'yes';
                           
                            }

                            
                
                       
                            // if ($arr[$supervisor]['printed'] == 'no') {
                            //     echo "<td   ' rowspan='".$arr[$supervisor]['rowspan']."'>".$supervisor."</td>";
                            //     $arr[$supervisor]['printed'] = 'yes';
                           
                            // }

                          //   if ($arr[$project_id]['printed'] == 'no') {
                          //     // echo "<td rowspan='".$arr[$empName]['rowspan']."'>".$sno."</td>";
                          //     // echo "<td class=' px-5 py-3 text-sm font-semibold text-xs text-gray-600 dark:text-gray-400' rowspan=' ".$arr[$project_id]['rowspan']."'>".$project_id."</td>";
                          //     // echo "<td  class=' px-5 py-3 text-sm font-semibold text-xs text-gray-600 dark:text-gray-400' rowspan='".$arr[$project_id]['printed']."'>".$supervisor."</td>";
                    
                          //     echo "<td  class=' px-5 py-3 text-sm font-semibold text-xs text-gray-600 dark:text-gray-400' rowspan='".$arr[$supervisor]['rowspan']."'>".$supervisor."</td>";
                          //     $arr[$project_id]['printed'] = 'yes';
                              
                         
                          // }
                  
                              // echo "<td >".$dept[$i]."</td>";

                              
                            //--------------FIRST SEMESTER------------//
                            //proposal evaluation
                           
                            echo "<td  class='border-right'>".$proposal_weight[$i]."</td>";

                              //1st  evaluation
                         
                              echo "<td class='border-right'>".$fst_weight[$i]."</td>";

                              //1st  progress
                             
                              echo "<td class='border-right'>".$progress_first_weight[$i]."</td>";




                            //--------------SECOND SEMESTER------------//
                            //report rubric 
                         
                            echo "<td class='border-right'>".$report_weight[$i]."</td>";
                            //2nd  evaluation
                             
                              echo "<td class='border-right'>".$final_weight[$i]."</td>";
                            // 2nd progress
                          
                              echo "<td class='border-right'>".$final_progress_weight[$i]."</td>";
                              echo "<td class='border-right'>".$total."</td>";
                  
                              echo "</tr>";
                              
                  
                          }
                          
                       
                         
                        //   echo "
                        //   </tbody> </table>";
                        //   $sno++;
                          ?>
                                  </tbody> </table> 
                        


</form>
</div>
</div>
</div>
</div>
</div>

</body>

</html>
<script>
      // $(document).ready(function(){
//     $('#project_list').click(function(e){
   
      
//         e.preventDefault();
//         var project_list = $('#project_list').val();
//         var dept = $("#dept").val();
//         var batch = $("#batch").val();
// console.log(dept);
//         $.ajax({
          
//             method:"POST",
//         url: 'project_list.php',
//        date:{project_list:project_list, batch:batch , dept:dept},
//          success : function(data){
         
//           $("#table-data").html(data);
//          }
//         })
//     })
// })



function project_list(){
  var project_list = $('#project_list').val();
     var batch = $('#batch').val();
     var dept = $('#dept').val();
  
     if(batch == ""){
       $("#table-data").html("");
     }else{
       $.ajax({
         url : "project_list.php",
         type : "POST",
         data : { batch :batch, dept:dept},
         success : function(data){
           $("#table-data").html(data);
           console.log(batch);
         }
       });
     }

}

 
function supervisor_list(){
  var project_list = $('#supervisor_list').val();
     var batch = $('#batch').val();
     var dept = $('#dept').val();
  
     if(batch == ""){
       $("#table-data").html("");
     }else{
       $.ajax({
         url : "supervisor_list.php",
         type : "POST",
         data : { batch :batch, dept:dept},
         success : function(data){
           $("#table-data").html(data);
           console.log(batch);
         }
       });
     }

}
 
function evaluation_list(){
  var project_list = $('#evaluation_list').val();
     var batch = $('#batch').val();
     var dept = $('#dept').val();
  
     if(batch == ""){
       $("#table-data").html("");
     }else{
       $.ajax({
         url : "load-batch-table.php",
         type : "POST",
         data : { batch :batch, dept:dept},
         success : function(data){
           $("#table-data").html(data);
           console.log(batch);
         }
       });
     }

}
</script>
<?php

$conn=mysqli_connect('localhost','root','','rubric');

$batch=$_POST['batch'];
$dept=$_POST['dept'];
?>
<html >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gradinf_FYDP --FYP RUBRIC Dashboard</title>

    <div>
            <!-- <div class='p-3'>         
<button type='button' id='project_list'  onclick="project_list()" class='btn btn-primary'>Project List</button>
</div>
<div class='px-3 py-1'>
<button id='supervisor_list'   class='btn btn-primary' onclick="supervisor_list()" >Supervisor list</button>
</div> -->
<!-- <div class='p-3'>
<button id='supervisor_list'   class='btn btn-primary' onclick="view_details()" >veiw all details</button>
</div> -->
<!-- <div class='px-3 py-2'>
<button id='evaluation_list'   class='btn btn-primary' onclick=" evaluation_list()" >Evaluation List</button>
</div> -->
<hr>               
</div>
          
 


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
                                       
 <form method="post" action="../php/export.php">
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
        $proposal_planI = array();
        $proposal_planII = array();
        $proposal_planIII = array();
        $proposal_planIV = array();
        $proposal_weight = array();
 //1st  evaluation
        $planI = array();
        $planII = array();
        $planIII = array();
        $planIV = array();
        $fst_weight = array();
   //1st progress 
        $progress_first_planI = array();
        $progress_first_planII = array();
        $progress_first_planIII = array();
        $progress_first_planIV = array();
        $progress_first_weight = array();





 //--------------SECOND SEMESTER------------//


 //report rubric
        $report_planI = array();
        $report_planII = array();
        $report_planIII = array();
        $report_planIV = array();
        $report_planV = array();
        $report_planVI = array();
        $report_planVII= array();
        $report_planVIII= array();
        $report_weight = array();


   //2nd Evaluation
        $final_planI = array();
        $final_planII = array();
        $final_planIII = array();
        $final_planIV = array();
        $final_planV = array();
        $final_weight = array();

   //2nd progress
   $progress_final_planI = array();
   $progress_final_planII = array();
   $progress_final_planIII = array();
   $progress_final_planIV = array();
   $progress_final_planV = array();
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

            array_push($proposal_planI, $row['proposal_planI']);
            array_push($proposal_planII, $row['proposal_planII']);
            array_push($proposal_planIII, $row['proposal_planIII']);
            array_push($proposal_planIV, $row['proposal_planIV']);
            array_push($proposal_weight, $row['proposal_weight']);

            //1st semester 
            array_push($planI, $row['planI']);
            array_push($planII, $row['planII']);
            array_push($planIII, $row['planIII']);
            array_push($planIV, $row['planIV']);
            array_push($fst_weight, $row['fst_weight']);

          // 1st progress evaluation
            array_push($progress_first_planI, $row['progress_first_planI']);
            array_push($progress_first_planII, $row['progress_first_planII']);
            array_push($progress_first_planIII, $row['progress_first_planIII']);
            array_push($progress_first_planIV, $row['progress_first_planIV']);
            array_push($progress_first_weight, $row['progress_first_weight']);





                //--------------SECOND SEMESTER------------//


     // report rubric

     array_push($report_planI, $row['report_planI']);
     array_push($report_planII, $row['report_planII']);
     array_push($report_planIII, $row['report_planIII']);
     array_push($report_planIV, $row['report_planIV']);
     array_push($report_planV, $row['report_planV']);
     array_push($report_planVI, $row['report_planVI']);
     array_push($report_planVII, $row['report_planVII']);
     array_push($report_planVIII, $row['report_planVIII']);
     array_push($report_weight, $row['report_weight']);







            //2nd Evaluation
            
            array_push($final_planI, $row['final_planI']);
            array_push($final_planII, $row['final_planII']);
            array_push($final_planIII, $row['final_planIII']);
            array_push($final_planIV, $row['final_planIV']);
            array_push($final_planV, $row['final_planV']);
            array_push($final_weight, $row['final_weight']);

     //2nd progress 
            
     array_push($progress_final_planI, $row['progress_final_planI']);
     array_push($progress_final_planII, $row['progress_final_planII']);
     array_push($progress_final_planIII, $row['progress_final_planIII']);
     array_push($progress_final_planIV, $row['progress_final_planIV']);
     array_push($progress_final_planV, $row['progress_final_planV']);
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
$year=$_POST['batch']+4;
echo "<h3 class='text-center p-4'> NED UNIVERSITY OF ENGINEERING AND TECHNOLOGY	<br>							
Department of Computer and Information Systems Engineering						<br>		
Final Year Design Project (FYDP) Grading								<br>
Batch :". $b."
</h3>"?>



<form action="" method=POST>
<input type='hidden' class='batch' id='batch' value='<?php echo $row['batch']?> '>
<input type='hidden' class='dept' id='dept' value='<?php echo $row['department']?> '>
<table class="table table-hover text-center table-earning">
                                        <thead class="table-dark border ">
                                          <tr> <th colspan=5></th>
                                        
                                          <th colspan=15 class='border'>1st Semester  Evaluation</th>
                                          <th colspan=21 class='border'> 2nd Semester  Evaluation</th>
                                      </tr>
                                      <tr> <th colspan=5></th>
                                        
                                        <th colspan=5 class='border'>Propoject Proposal</th>
                                        <th colspan=5 class='border'>Semester Evaluation</th>
                                        <th colspan=5 class='border'>Semester progress</th>

                                        <th colspan=9 class='border'>Final Report</th>
                                        <th colspan=6 class='border'>Final Evaluation</th>
                                        <th colspan=6 class='border'>Final Semester progress</th>
                                    </tr>
                                            <tr>
                                            <th >Project ID</th>
                                            <th >Supervisor</th>
                                            <th >Student Name</th>
                                            <th>Seat No.</th>
                                            <!-- <th>Batch No.</th> -->
                                            <th >Project Title</th>
                                            <!-- <th >Department</th> -->
                                            <!-- FIRST SEMESTER -->
                                            
                                            <!-- proposal semester -->
                                            <th class="border-left">I <br>Problem Identifiction & Objectives  </th>
                                            <th>II <br>Relevance SDGs<br> (3)   </th>
                                            <th>III <br>Proposed Methodology<br> (3)  </th>
                                            <th>IV <br>Work Plan<br> (3)  </th>
                                            <th  class="border-right">Weight Average Score<br>(12) </th>


                                            <!-- 1st evaluation -->
                                           <th scope="row" >I<br>Literature Review <br> (12) </th>
                                          <th scope="row" >II<br>Methodology <br> (12)</th>
                                          <th scope="row" >III<br>Adherence to Work Plan <br> (12)</th>
                                          <th scope="row" >IV<br>Reporting and Presentation<br> (12)</th>
                                          <th scope="row" class="border-right">Weighted Average Score<br> (48) </th>
                                            <!--  1st progress  -->
                                            <th scope="row" >I<br>Intellectual Contribution <br> (5)</th>
                                          <th scope="row" >II<br>Attendance <br> (5) </th>
                                          <th scope="row" >III<br>Coherence with group <br> (5) </th>
                                          <th scope="row" >IV<br>Response to Questions<br> (5) </th>
                                          <th scope="row" class="border-right">Weighted Average Score <br> (20)</th>



                                            <!-- SECOND SEMESTER -->
                                            
                                            <!-- REPORT RUBRIC  -->
                                            <th scope="row" >I<br>Literature Review <br> (4)</th>
                                            <th scope="row" >II<br>Methodology<br> (4)</th>
                                            <th scope="row" >III<br>Results and Discussion<br> (4)</th>
                                            <th scope="row" >IV<br>Conclusions and Recommendations<br> (4)</th>
                                            <th scope="row" > V<br>Relevance to SDGs<br> (4)</th>
                                            <th scope="row" > VI<br>Originality<br> (4)</th>
                                            <th scope="row" > VII<br>Formatting / Organization<br> (4)</th>
                                            <th scope="row" > VIII<br>Technical Writing<br> (4)</th>
                                            <th scope="row" class="border-right"> Weighted Average Score<br> (32)</th>

                                                    <!-- 2ND EVALUATION -->
                                            <th scope="row" >I<br>Relevance / Content  <br> (8)</th>
                                            <th scope="row" >II<br>Organization and Delivery<br> (8)</th>
                                            <th scope="row" >III<br>Design / Layout<br> (8)</th>
                                            <th scope="row" >IV<br>Time Management<br> (8)</th>
                                            <th scope="row" >V<br>Question / Answers<br> (8) </th>
                                            <th scope="row" class="border-right">Weighted Average Score<br> (40) </th>

                                            <!-- 2ND Progress -->

                                            <th scope="row" >I<br>Intellectual Contribution <br> (16)</th>
                                            <th scope="row" >II<br>Attendance <br> (8)</th>
                                            <th scope="row" >III<br>Coherence with group <br> (8)</th>
                                            <th scope="row" >IV<br>Response to Questions<br> (8)</th>
                                            <th scope="row" >V<br>Timely Report Submission<br> (8)</th>
                                            <th scope="row"class="border-right">Weighted Average Score <br> (48)</th>
  




                                          </tr>
                                          <!--  FIRST SEMESTER -->
                                          <tr> 
                                            <!-- proposal semester -->
                                          <th colspan=5 class='border'></th>
                                          <th scope="row" >PLO-2(%)</th>
                                          <th scope="row" >PLO-7(%)</th>
                                          <th scope="row" >PLO-3(%)</th>
                                          <th scope="row" >PLO-11(%)</th>
                                          <th scope="row"   class="border-right" > </th>

                                            <!-- 1st evaluation -->
                                            <th scope="row" >PLO-2(%)</th>
                                            <th scope="row" >PLO-3(%)</th>
                                            <th scope="row" >PLO-11(%)</th>
                                            <th scope="row"   >PLO-10(%)</th>
                                            <th scope="row"class="border-right" > </th>
                                           <!--  1st progress  -->
                                           <th scope="row" >PLO-2(%)</th>
                                          <th scope="row" >PLO-8(%)</th>
                                          <th scope="row" >PLO-9(%)</th>
                                          <th scope="row" >PLO-10(%)</th>
                                          <th scope="row"  class="border-right" > </th>


                                            <!-- SECOND SEMESTER -->
                                                  
                                            <!-- REPORT RUBRIC  -->
                                            <th scope="row" >PLO-2(%)</th>
                                            <th scope="row" >PLO-3(%)</th>
                                            <th scope="row" >PLO-3(%)</th>
                                            <th scope="row" >PLO-12(%)</th>
                                            <th scope="row" >PLO-7(%)</th>
                                            <th scope="row" >PLO-8(%)</th>
                                            <th scope="row" >PLO-10(%)</th>
                                            <th scope="row" >PLO-10(%)</th>
                                            <th scope="row" class="border-right"> </th>
                                       
                                             <!-- 2ND EVALUATION -->

                                              <th scope="row" >PLO-10(%)</th>
                                              <th scope="row" >PLO-10(%)</th>
                                              <th scope="row" >PLO-10(%)</th>
                                              <th scope="row" >PLO-10(%)</th>
                                              <th scope="row" >PLO-10(%)</th>
                                              <th scope="row" class="border-right" > </th>
                                            <!-- 2ND PROGRESS -->
                                            <th scope="row" >PLO-2(%)</th>
                                             <th scope="row" >PLO-8(%)</th>
                                             <th scope="row" >PLO-9(%)</th>
                                             <th scope="row" >PLO-10(%)</th>
                                             <th scope="row" >PLO-11(%)</th>
                                             <th scope="row" class="border-right"> </th>
                                                   
    </tr>

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
                            echo "<td '>".$proposal_planI[$i]."</td>";
                            echo "<td '>".$proposal_planII[$i]."</td>";
                            echo "<td '>".$proposal_planIII[$i]."</td>";
                            echo "<td '>".$proposal_planIV[$i]."</td>";
                            echo "<td  class='border-right'>".$proposal_weight[$i]."</td>";

                              //1st  evaluation
                              echo "<td '>".$planI[$i]."</td>";
                              echo "<td '>".$planII[$i]."</td>";
                              echo "<td '>".$planIII[$i]."</td>";
                              echo "<td '>".$planIV[$i]."</td>";
                              echo "<td class='border-right'>".$fst_weight[$i]."</td>";

                              //1st  progress
                              echo "<td '>".$progress_first_planI[$i]."</td>";
                              echo "<td '>".$progress_first_planII[$i]."</td>";
                              echo "<td '>".$progress_first_planIII[$i]."</td>";
                              echo "<td '>".$progress_first_planIV[$i]."</td>";
                              echo "<td class='border-right'>".$progress_first_weight[$i]."</td>";




                            //--------------SECOND SEMESTER------------//
                            //report rubric 
                            echo "<td '>".$report_planI[$i]."</td>";
                            echo "<td '>".$report_planII[$i]."</td>";
                            echo "<td '>".$report_planIII[$i]."</td>";
                            echo "<td '>".$report_planIV[$i]."</td>";
                            echo "<td '>".$report_planV[$i]."</td>";
                            echo "<td '>".$report_planVI[$i]."</td>";
                            echo "<td '>".$report_planVII[$i]."</td>";
                            echo "<td '>".$report_planVIII[$i]."</td>";
                            echo "<td class='border-right'>".$report_weight[$i]."</td>";
                            //2nd  evaluation
                              echo "<td '>".$final_planI[$i]."</td>";
                              echo "<td '>".$final_planII[$i]."</td>";
                              echo "<td '>".$final_planIII[$i]."</td>";
                              echo "<td '>".$final_planIV[$i]."</td>";
                              echo "<td '>".$final_planV[$i]."</td>";
                              echo "<td class='border-right'>".$final_weight[$i]."</td>";
                            // 2nd progress
                              echo "<td '>".$progress_final_planI[$i]."</td>";
                              echo "<td '>".$progress_final_planII[$i]."</td>";
                              echo "<td '>".$progress_final_planIII[$i]."</td>";
                              echo "<td '>".$progress_final_planIV[$i]."</td>";
                              echo "<td '>".$progress_final_planV[$i]."</td>";
                              echo "<td class='border-right'>".$final_progress_weight[$i]."</td>";
                  
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
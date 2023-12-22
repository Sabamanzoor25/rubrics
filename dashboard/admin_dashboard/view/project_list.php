
<html >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gradinf_FYDP --FYP RUBRIC Dashboard</title>

    <div>
            <div class='p-3'>         
<button type='button' id='project_list'  onclick="project_list()" class='btn btn-primary'>Project List</button>
</div>
<div class='p-3'>
<button id='supervisor_list'   class='btn btn-primary' onclick="supervisor_list()" >Supervisor list</button>
</div>
<div class='px-3 py-2'>
<button id='evaluation_list'   class='btn btn-primary' onclick=" evaluation_list()" >Evaluation List</button>
</div>
</div>
          
 


<div class="container" style="margin-top:50px;" id="wrapper">

<div class="row">
  
 <div class="col-lg">
    <h2 class="title-1 m-b-25"></h2>
<div class="table-responsive table--no-card">
  
 <div class="col-lg">
 <div>
    <!-- <h2>Batch</h2> -->
    </div>


<div>
<!-- <div class=" p-4">
                                       
 <form method="post" action="../php/export.php">
  <div class=''>
  <button type="submit" name="export"  value="Export" class="btn btn-success btn-md ml-2  float-left">EXPORT</button>
  </div>   
</form>
 <form action='../php/pdf.php' method=POST >
 <div class=''>
    <button type="submit" name="pdf"  value="pdf" class="btn btn-primary btn-md ml-2 float-left ">PDF</button>
  </div>    
  </form>
 
      </div>
      <br>
      <hr>
</div> -->


<?php

$conn=mysqli_connect('localhost','root','','rubric');
// $id=$_POST['id'];
// $sno=1;
// $query=("SELECT * FROM $id");
// $select =mysqli_query($conn,$query);
?>


<?php
$batch=$_POST['batch'];
$dept=$_POST['dept'];

        # connect to mysql server
        # and select the database, on which
        # we will work.
        // $conn=mysqli_connect('localhost','root','','rubric');

        # Query the data from database.
        $query  = "SELECT * FROM rubric where department='$dept' and batch='$batch'  ORDER BY project_id ";
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
        $planI = array();
        $planII = array();
        $planIII = array();
        $planIV = array();
        $weight = array();
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
            array_push($planI, $row['planI']);
            array_push($planII, $row['planII']);
            array_push($planIII, $row['planIII']);
            array_push($planIV, $row['planIV']);
            array_push($weight, $row['weight']);

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





<form action="" method=POST> 
<input type='hidden' class='batch' id='batch' value='<?php echo $row['batch']?> '>
<input type='hidden' class='dept' id='dept' value='<?php echo $row['department']?> '>

<table class="table table-hover text-center">
                                        <thead class="table-dark ">
                                            <tr>
                                            <th >Project ID</th>
                                            <!-- <th >Supervisor</th>
                                            <th >Student Name</th>
                                            <th>Seat No.</th>
                                            <th>Batch No.</th> -->
                                            <th >Project Title</th>
                                            <!-- <th >department</th> -->
                                            <!-- <th  >I <br>Problem Identifiction & Objectives<br> (3) <br> PLO-2(%)  </th>
                                            <th >II <br>Relevance SDGs<br> (3) <br> PLO-7(%)  </th>
                                            <th >III <br>Proposed Methodology<br> (3) <br> PLO-3(%)  </th>
                                            <th >IV <br>Work Plan<br> (3) <br> PLO-11(%)  </th>
                                            <th >weight Average Score<br>(12) </th> -->
                                          </tr>
                                          <tr>

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
                              $w=$weight[$i];
                              if($w<=0){
                            
                            //   echo "<tr class='text-warning'>";
                              }
                              else{
                                echo "<tr>";
                              }
                              # If this row is not printed then print.
                              # and make the printed value to "yes", so that
                              # next time it will not printed.
                              if ($arr[$project_id]['printed'] == 'no') {
                                  // echo "<td rowspan='".$arr[$empName]['rowspan']."'>".$sno."</td>";
                                  echo "<td  rowspan=' ".$arr[$project_id]['rowspan']."'>".$project_id."</td>";
                                  // echo "<td  class=' px-5 py-3 text-sm font-semibold text-xs text-gray-600 dark:text-gray-400' rowspan='".$arr[$project_id]['printed']."'>".$supervisor."</td>";
                            
                                 


                                //   echo "<td ' rowspan='".$arr[$project_id]['rowspan']."'>".$supervisor."</td>";
                                  $arr[$project_id]['printed'] = 'yes';
                                  
                             
                              }
                         
                            //   echo "<td '>".$sname[$i]."</td>";
                            //   echo "<td '>".$seatno[$i]."</td>";
                            //   echo "<td '>".$batch[$i]."</td>";
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
                  
                            //   echo "<td >".$dept[$i]."</td>";
                            //   echo "<td '>".$planI[$i]."</td>";
                            //   echo "<td '>".$planII[$i]."</td>";
                            //   echo "<td '>".$planIII[$i]."</td>";
                            //   echo "<td '>".$planIV[$i]."</td>";
                            //   echo "<td '>".$weight[$i]."</td>";
                  
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
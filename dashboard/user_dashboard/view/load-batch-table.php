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
                      <nav>
												<div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#evaluation_list" role="tab" aria-controls="nav-profile"
													 aria-selected="false">Evaluation List</a>
                           <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#first_evaluation_list" role="tab" aria-controls="nav-profile"
													 aria-selected="false">1st Semester Evaluation List</a>
                           <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#second_evaluation_list" role="tab" aria-controls="nav-profile"
													 aria-selected="false">2nd Semester Evaluation List</a>
												<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#project_list" role="tab" aria-controls="nav-profile"
													 aria-selected="false"  >Final Evaluation Report</a>
                           
													<!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#supervisor_list" role="tab" aria-controls="nav-profile"
													 aria-selected="false">Supervisor list</a>                              -->
												</div>
											</nav>

                      <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                  <div class="tab-pane fade" id="evaluation_list" role="tabpanel" aria-labelledby="nav-profile-tab">
<H1 class='p4 text-center'>Evaluation list</H1>
<?php include 'evaluation_list.php'?>
                                  </div>
                                  <div class="tab-pane fade" id="first_evaluation_list" role="tabpanel" aria-labelledby="nav-profile-tab">
                                  <H1 class='p4 text-center'>1st Semester Evaluation List</H1>
<?php include '1st_semester.php'?>
                                  </div>
                                  <div class="tab-pane fade" id="second_evaluation_list" role="tabpanel" aria-labelledby="nav-profile-tab">
                                  <H1 class='p4 text-center'>2nd Semester Evaluation List</H1>
<?php include '2nd_semester.php'?>
                                  </div>
                                  <div class="tab-pane fade" id="project_list" role="tabpanel" aria-labelledby="nav-profile-tab">
                                  <H1 class='p4 text-center'>Final Evaluation List</H1>
<?php include 'final_evaluation.php'?>
                                  </div>
                                  <!-- <div class="tab-pane fade" id="supervisor_list" role="tabpanel" aria-labelledby="nav-profile-tab">
                                  <H1 class='p4 text-center'>Supervisor List</H1>
<?php //include 'supervisor_list.php'//?>
</div> -->
                      </div>
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

 
// function supervisor_list(){
//   var project_list = $('#supervisor_list').val();
//      var batch = $('#batch').val();
//      var dept = $('#dept').val();
  
//      if(batch == ""){
//        $("#table-data").html("");
//      }else{
//        $.ajax({
//          url : "supervisor_list.php",
//          type : "POST",
//          data : { batch :batch, dept:dept},
//          success : function(data){
//            $("#table-data").html(data);
//            console.log(batch);
//          }
//        });
//      }

// }
 
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
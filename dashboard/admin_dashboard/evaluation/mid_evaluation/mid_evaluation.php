



<?php

$conn = mysqli_connect("localhost","root","","rubric") or die("Connection failed");


session_start();
if(!ISSET($_SESSION['Login'])){

}
?>
<!DOCTYPE html>
<html lang="en">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body class="animsition">

<div class="card-body">


                        
        
<hr>

<h1>Semester 1 </h1> <hr>

<nav >
												<div class="nav nav-tabs" id="nav-tab" role="tablist">
												<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#proposal_rubric" role="tab" aria-controls="nav-profile"
													 aria-selected="false">Proposal Rubric</a>
													<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#progress_rubric" role="tab" aria-controls="nav-profile"
													 aria-selected="false">Progress Rubric</a>
                                                     <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#evaluation_rubric" role="tab" aria-controls="nav-profile"
													 aria-selected="false">Evaluation Rubric</a>
												</div>
											</nav>

<div class="tab-content pl-3 pt-2" id="nav-tabContent">


<div class="tab-pane fade" id="proposal_rubric" role="tabpanel" aria-labelledby="nav-profile-tab">
       <div class="card px-6">
<?php 
include 'proposal_evaluation.php';
?>
</div>
</div>							
   
       <div class="tab-pane fade" id="progress_rubric" role="tabpanel" aria-labelledby="nav-profile-tab">
       <div class="card px-6">
<?php 
include '1st_progress_rubric.php';
?>
</div>
</div>




<div class="tab-pane fade" id="evaluation_rubric" role="tabpanel" aria-labelledby="nav-contact-tab">
<hr><h2> Semester 1 Evaluation Rubric</h2>
  <form action="" method="GET" novalidate="novalidate">


    <div class=" mt-4 text-sm px-5"> 

<label class="block text-sm  ">
<span class="text-gray px-4"> DEPARTMENT:</span>
<select name='dept' id='dept' required  class="form-control-sm dept  border-bottom " >
    <option value="" >-----Select Department-----</option>

</select>
<!-- <input class="form-input  border-bottom "  id="dept" name='dept' required /> -->
</label>


<label class="block text-sm  ">
<span class="text-gray px-4">BATCH:</span> 
<select   name="batch" id='batch' class="batch form-control-sm  border-bottom " >
                                    <!-- <option value="">----Select Batch----</option> -->

</select>


</label>





</div> 



<div class="col-12 col-md-4 px-4">
    <label for="cc-payment" class="control-label mb-1 ">PROJECT ID</label>
                <select id='p_id'  name="p_id"  data-p_title  data-supervisor class="form-control-sm form-control">
                <!-- <option value="">---------Select Project ID--------</option> -->

                </select>
            
    <label for="cc-payment" class="control-label mb-1 ">PROJECT TITLE</label>
                <select id='p_title'  name="p_title"   class="p_title form-control-sm form-control">
                <!-- <option value="">---------Select Project ID--------</option> -->

                </select>
                <label for="cc-payment" class="control-label mb-1 ">SUPERVISOR</label>
                <select id='supervisor'  name="supervisor"   class="supervisor form-control-sm form-control">
                <!-- <option value="">---------Select Project ID--------</option> -->

                </select>
            </div>




    <!-- <div class="col-12 col-md-4">
    <label for="cc-payment" class="control-label mb-1">PROJECT ID</label>
                <select id='pid'  name="pid"  class="form-control-sm form-control">
                <option value="">---------Select Project ID--------</option>

                </select>
            </div> -->




            
           
            <div id="table-data"></div>
            
        
       
    </form>

</div>



                                  
                                   

                                        
 </div>
                               
                      
                  
                   
              
                      
                           
              
                    
                    
   

 
    <script> 

   $(document).ready(function(){
    $('#animated').addClass('animated fadeInDown');




    function loadData(type, id){
    $.ajax({
        url : "../batch/update_batch/dept_batch.php",
        type : "POST",
        data: {type : type, id : id},
        success : function(data){
            if(type == "batch"){
                $("#batch").html(data);
            }else{
                $("#dept").append(data);
            }
        }
    });
}

loadData();

$("#dept").on("change",function(){
    var dept = $("#dept").val();
  if(dept != ""){
        loadData("batch", dept);
    }else{
        $("#batch").html("");
    }
})
})




$("#batch").change(function(){
        var id = $(this).val();
        var dept = $("#dept").val();
        if(id == ""){
          $("#table-data").html("");
        }else{
          $.ajax({
            // url : "load-batch-table.php",
            url : "project_id.php",
            type : "POST",
            data : { id : id, dept:dept},
            success : function(data){
              $("#p_id").html(data);
            }
          });
        }
      })




      $(document).on('change', '#p_id', function(){
       var id = $(this).val();
       var sub_category_id = $(this).data('p_title');
       var batch = $('#batch').val();
       var dept = $('#dept').val();
       console.log(id);
       console.log(batch);
       $.ajax({
         url:"p_title.php",
         method:"POST",
         data:{id:id, batch:batch, dept:dept},
         success:function(data)
         {
             var html = data;
           console.log(html);
           console.log(id);
           console.log(sub_category_id);
    $('#p_title' +sub_category_id).html(html);


         }
       })
     });





     $(document).on('change', '#p_id', function(){
       var id = $(this).val();
       var sub_category_id = $(this).data('supervisor');
       var batch = $('#batch').val();
       var dept = $('#dept').val();
       console.log(id);
       console.log(batch);
       $.ajax({
         url:"supervisor.php",
         method:"POST",
         data:{id:id, batch:batch, dept:dept},
         success:function(data)
         {
             var html = data;
           console.log(html);
           console.log(id);
           console.log(sub_category_id);
    $('#supervisor' +sub_category_id).html(html);


         }
       })
     });











     $("#p_id").change(function(){
     var id = $(this).val();
     var batch = $('#batch').val();
     var dept = $("#dept").val();
     console.log(batch);
     if(id == ""){
       $("#table-data").html("");
     }else{
       $.ajax({
         url : "mid_evaluation/load-table.php",
         type : "post",
         data : { id : id, batch:batch, dept:dept},
         success : function(data){
           $("#table-data").html(data);
         }
       });
     }
    //  $( "#alert" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );

   })



   $( "#alert" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );



// });

 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<!-- end document-->

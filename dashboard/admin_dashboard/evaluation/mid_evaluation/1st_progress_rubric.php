<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card-body">
  <hr><h2>Semester 1 Progress Rubric</h2>

<hr>
<form action="" method="post" novalidate="novalidate">


  <div class=" mt-4 text-sm px-5"> 

<label class="block text-sm  ">
<span class="text-gray px-4"> DEPARTMENT:</span>
<select id="dept_1" name='dept' required  class="form-control-sm   border-bottom " >
  <option value="" >-----Select Department-----</option>

</select>
<!-- <input class="form-input  border-bottom "  id="dept" name='dept' required /> -->
</label>


<label class="block text-sm  ">
<span class="text-gray px-4">BATCH:</span> 
<select id='batch_1'  name="batch"   class=" form-control-sm  border-bottom " >
                                  <!-- <option value="">----Select Batch----</option> -->

</select>


</label>
</div> 



<div class="col-12 col-md-4 px-4">
  <label for="cc-payment" class="control-label mb-1 ">PROJECT ID</label>
              <select id='p_id_1'  name="p_id"  data-p_title  data-supervisor class="form-control-sm form-control">
              <!-- <option value="">---------Select Project ID--------</option> -->

              </select>
          
  <label for="cc-payment" class="control-label mb-1 ">PROJECT TITLE</label>
              <select id='p_title_1'  name="p_title"   class=" form-control-sm form-control">
              <!-- <option value="">---------Select Project ID--------</option> -->

              </select>
              <label for="cc-payment" class="control-label mb-1 ">SUPERVISOR</label>
              <select id='supervisor_1'  name="supervisor"   class=" form-control-sm form-control">
              <!-- <option value="">---------Select Project ID--------</option> -->

              </select>
          </div>
          <div id="progress_table_data"></div>
         

  </form>
</div>
</body>
</html>
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
                $("#batch_1").html(data);
            }else{
                $("#dept_1").append(data);
            }
        }
    });
}

loadData();

$("#dept_1").on("change",function(){
    var dept = $("#dept_1").val();
  if(dept != ""){
        loadData("batch", dept);
    }else{
        $("#batch_1").html("");
    }
})
})






$("#batch_1").change(function(){
        var id = $(this).val();
        var dept = $("#dept_1").val();
        if(id == ""){
          $("#progress_table_data").html("");
        }else{
          $.ajax({
            // url : "load-batch-table.php",
            url : "project_id.php",
            type : "POST",
            data : { id : id, dept:dept},
            success : function(data){
              $("#p_id_1").html(data);
            }
          });
        }
      })




      $(document).on('change', '#p_id_1', function(){
       var id = $(this).val();
       var sub_category_id = $(this).data('p_title');
       var batch = $('#batch_1').val();
       var dept = $('#dept_1').val();
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
    $('#p_title_1' +sub_category_id).html(html);


         }
       })
     });





     $(document).on('change', '#p_id_1', function(){
       var id = $(this).val();
       var sub_category_id = $(this).data('supervisor');
       var batch = $('#batch_1').val();
       var dept = $('#dept_1').val();
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
    $('#supervisor_1' +sub_category_id).html(html);


         }
       })
     });











     $("#p_id_1").change(function(){
     var id = $(this).val();
     var batch = $('#batch_1').val();
     var dept = $("#dept_1").val();
     console.log(batch);
     if(id == ""){
       $("#progress_table_data").html("");
     }else{
       $.ajax({
         url : "mid_evaluation/progress_load_table.php",
         type : "POST",
         data : { id : id, batch:batch, dept:dept},
         success : function(data){
           $("#progress_table_data").html(data);
         }
       });
     }
    //  $( "#alert" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );

   })



   $( "#alert" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );



// });

 </script>
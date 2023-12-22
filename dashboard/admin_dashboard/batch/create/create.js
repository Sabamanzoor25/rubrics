$(document).ready(function(){

  function loadData(type, id){
      $.ajax({
          url : "../update_batch/dept_batch.php",
          type : "POST",
          data: {type : type, id : id},
          success : function(data){
              if(type == "batch"){
                  $("#batch1").html(data);
              }else{
                  $("#dept1").append(data);
              }
          }
      });
  }

  loadData();

  $("#dept1").on("change",function(){
      var dept = $("#dept1").val();
    if(dept != ""){
          loadData("batch", dept);
      }else{
          $("#batch1").html("");
      }
})





  
  $("#batch1").change(function(){
        var id = $(this).val();
        var dept = $("#dept1").val();
        // var supervisor = $('#supervisor').val();
        // var fyp_title = $('#title').val();
        var pid = $('#pid').val();
        if(id == ""){
          $("#table-data").html("");
        }else{
          $.ajax({
            // url : "load-batch-table.php",
            url : "test.php",
            type : "POST",
            data : { id : id, dept:dept},
            success : function(data){
              $("#table-data").html(data);
            }
          });
        }
      })
  
      // , supervisor:supervisor, fyp_title:fyp_title, pid:pid













  
  
  });
  


  
  
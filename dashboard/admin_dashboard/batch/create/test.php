<?php 
session_start(); 
$connect=mysqli_connect('localhost','root','','rubric');
$dept=$_POST['dept'];
// $supervisor=$_POST['supervisor'];
$batch=$_POST['id'];
// $fyp_title=$_POST['fyp_title'];
// $pid=$_POST['pid'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <title>Document</title>
    
</head>
<body>
<span id="error"></span>

<form method='post' id='insert_form'  name='myform' action=''>
 

<input type='hidden' name='batch1' id='batch1'   required value='<?php echo $batch; ?>'>   
<!-- <input type='hidden' name='supervisor' id='supervisor'  required value='<?php //echo $supervisor; ?>'> -->
<input type='hidden' name='dept1' id='dept1' required value='<?php echo $dept; ?>'>
<!-- <input type='hidden' name='fyp_title' id='fyp_title' required value='<?php // echo $fyp_title; ?>'> -->
<!-- <input type='hidden' name='pid' id='pid' required value='<?php echo $pid; ?>'> -->







                      <div class="  mt-4 text-sm px-3 has-validation">
                                
                                <label for="validationServer01" class="form-label block text-sm  ">
                                    <span class="text-gray px-3">PROJECT ID:</span> </label>
                                    <input  class="form-input  border-bottom " id="pid" name='pid' required />
                                     <div class="invalid-feedback">
                                        Please enter a project id.
                                    </div>
                                    </div>
                                    <div class=" mt-4 text-sm px-3">  
              <label class="block text-sm  ">
                <span class="text-gray px-3">FYP TITLE:</span>
                <input class="form-input  border-bottom " id="fyp_title" name='fyp_title'   required />
              </label>

              <label class="block text-sm  ">
                <span class="text-gray px-3">SUPERVISOR:</span>
                <select id="supervisor" name='supervisor' required class=" form-control-sm border-bottom">
                                                        <option value="">Select supervisor</option>

                                                        <?php
                                             
                                             $sql = "SELECT * FROM `user` ";

                                             $query = mysqli_query($connect,$sql) or die("Query Unsuccessful.");
                                         
                                             $a = "";
                                             while($row = mysqli_fetch_assoc($query)){
                                               $a .= "<option value='{$row['user_name']}'>{$row['user_name']}</option>";
                                             }
                                             echo $a;
                                           
                                           ?> 







                                                        </select>
                                                               
                                                                   </select>
                <!-- <input class="form-input  border-bottom " id="supervisor" name='supervisor' required   /> -->
              </label>
            </div>

            
                 <table class="table" id="item_table" >
                           
              <thead>
                <tr>
                <th>SEAT NO</th>
                <th>STUDENT NAME</th>
                 
                  <th><button type="button" name="add" class="btn btn-success btn-xs add"> Add</button></th>
                  <!-- th><button type="button" name="add" class="btn btn-success btn-xs add"> <span class="glyphicon glyphicon-plus-sign"></span></button></th> -->
                </tr>
  </thead>
              <tbody></tbody>
            </table>
           
    
            <br>
            <div align="center">
  
  <button name="btnsubmit" class="btn btn-info" value="Insert">Insert</button>
              <!-- <input type="submit" id='sumbit' name="btnsubmit" class="btn btn-info" value="Insert"  /> -->
              </form> 
</body>
<?php  include 'fydp/database_connection.php'; 
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
<script>
 $(document).ready(function(){
 
  


  var count = 0;
     

      $(document).on('click', '.add', function(){
        
        count++;

        var html = '';
        html += '<tr>';
       
        html += '<td><select name="seatno[]" class="form-control seatno" data-sname="'+count+'"><option value="">Select Seat no.</option><?php echo fill_select_box($dept, $batch, "0"); ?></select></td>';
        html += '<td><select name="sname[]" class="form-control sname" id="sname'+count+'"><option value="">Select Student name</option></select></td>';
        html += '<td><button type="button" name="remove" class="btn btn-danger btn-xs remove ">Remove</button></td>';
        $('tbody').append(html);
      });

      $(document).on('click', '.remove', function(){
        $(this).closest('tr').remove();
      });
    
     $(document).on('change', '.seatno', function(){
       var category_id = $(this).val();
       var sub_category_id = $(this).data('sname');
       var batch = $('#batch1').val();
       var dept = $('#dept1').val();
       console.log(category_id);
       console.log(batch);
       console.log(dept);
       $.ajax({
         url:"fydp/fill_sub_category.php",
         method:"POST",
         data:{category_id:category_id, batch:batch},
         success:function(data)
         {
             var html = data;
           console.log(html);
           console.log(category_id);
         
    $('#sname' +sub_category_id).html(html);

         }
       })
     });

    });


// duplication validation







$(function(){

  var validation_el = $('<div>')
            validation_el.addClass('validation-err alert alert-danger my-2')
            validation_el.hide()

       $('input[name="pid"]').on('input',function(){

            var code = $(this).val()
                $(this).removeClass("border-danger border-success")
                $(this).siblings(".validation-err").remove();
            var err_el = validation_el.clone()
   
                if(code == '')
                return false;
                var batch= $('#batch1').val();
                var dept= $('#dept1').val();
console.log(batch);
console.log(dept);
                $.ajax({
                    url:"validate.php",
                    method:'POST',
                    data:{code:code , batch:batch, dept:dept},
                    dataType:'json',
                    error:err=>{
                        console.error(err)
                        alert("An error occured while validating the data")
                    },
                    success:function(resp){
                        if(Object.keys(resp).length > 0 && resp.field_name == 'code'){
                            err_el.text(resp.msg)
                            $('input[name="pid"]').addClass('border-danger')
                            $('input[name="pid"]').after(err_el)
                            err_el.show('slideDown')
                            $('#submit').attr('disabled',true)
                           
                        }
                        
                        
                        else{
                            $('input[name="code"]').addClass('border-success')
                            $('#submit').attr('disabled',false)




                            // $('#error1').html('<div class="alert alert-danger">fyp_ttitle already exist</div>');



                            



                            
 $('#insert_form').on('submit', function(event){

event.preventDefault();
var error = '';


$('.sname').each(function(){
  var count = 1;

  if($(this).val() == '')
  {
    error += '<p>Enter row no. '+count+'  </p>';
    return false;
  }

  count =count  + 1;

});

$('.seatno').each(function(){

  var count = 1;

  if($(this).val() == '')
  {
    error += '<p>Enter row no. '+count+'</p> ';
    return false;
  }

  count = count + 1;

});

var form_data = $(this).serialize();

if(error == '')
{
  $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
      
      if(data == 'done')
      {

        $('#item_table').find('tr:gt(0)').remove();
        $('#error').html('<div class="alert alert-success">Record saved successfully</div>');
        // $( "#error" ).fadeIn( 300 ).delay( 1000 ).fadeOut( 400 );
      }
      else if(data=='not done'){
        $('#item_table').find('tr:gt(0)').remove();
        $('#insert_form')[0].reset();
        $('#error').html('<div class="alert alert-danger ">fyp_ttitle already exist</div>');
        
        // $( "#error" ).fadeIn( 300 ).delay( 1000 ).fadeOut( 400 );
      }
      
    }
  });
}
else
{
  $('#error').html('<div class="alert alert-danger">'+error+'</div>');
}
});






// 





//else
 
                        }
                    }
                })
        })

    })













//   function validateForm() {
//   let fyp_title = document.forms["myform"]["fyp_title"].value;
//   let pid = document.forms["myform"]["pid"].value;
//   let supervisor = document.forms["myform"]["supervisor"].value;
//   if (fyp_title == ""|| pid=='' || supervisor=='' ) {
    
//     $('#error').html('<div class="alert alert-danger">Fill required fields</div>') ;
//     return false;
//   }


// else{
  
  
 
  //   }
  // }


  // $("#supervisor").change(function(){
       
  //         $.ajax({
  //           // url : "load-batch-table.php",
  //           url : "supervisor.php",
  //           type : "POST",
            
  //           success : function(data){
  //             $("#supervisor").append(data);
              
  //           }
  //         });
     
  //     })





  // $("#supervisor").click(function(){
  //       $("#supervisor").load("supervisor.php");
  //   });

</script>
</html>
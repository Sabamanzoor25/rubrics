
<html >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gradinf_FYDP --FYP RUBRIC Dashboard</title>




    <!-- <link rel="stylesheet" href="../../../../assets/css/form2.css"/>
    <link href="../../../../assets/css/theme.css" rel="stylesheet" media="all"> -->








    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"  rel="stylesheet"  />
    



    <link href="../../../../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="../../../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


     

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>  -->
 <!-- Main CSS-->
    <link href="../../../../assets/css/theme.css" rel="stylesheet" media="all">

<!-- 
<div id="wrapper"> -->

<div class="container" style="margin-top:50px;" id="wrapper">
<div class="row mt-4">
 <div class="col-lg">
    <h2 class="title-1 m-b-25"></h2>
<div class="table-responsive table--no-card m-b-50 ">

<?php
if(isset($_SESSION['message']))
{
    echo "<h4>".$_SESSION['message']."</h4>";
    unset($_SESSION['message']);
}
?>
 <div class="card-body col-md-12 mt-4">




<?php

$connect=mysqli_connect('localhost','root','','rubric');
$id=$_POST['id'];
$dept=$_POST['dept'];
// $dept=$_POST['dept'];
$query=("SELECT * FROM rubric where department='$dept' AND batch='$id' order by seat_no");
$select =mysqli_query($connect,$query);
?>
<div class="table-responsive">
<form action="" method=POST>
<table class="table  table-earning" id="user_table">
<!-- <input  type="hidden" name="id" class="txtField"  value="batch20">  -->
<!-- <table align="center" cellpadding="10" border="1" id="user_table"> -->
    
<tr >
  <thead>
<th>Student Name</th>
<th>Seat No.</th>
<th>Batch</th>
<th>Department</th>
<th></th>
</thead>
<tbody>
</tr>
<?php
while ($row=mysqli_fetch_array($select)) 
{
 ?>
 <tr id="row<?php echo $row['s_id'];?>">
 <input id="batch<?php echo $row['s_id'];?>" type="hidden" name="<?php echo $id;?>">
 
  <td id="sname<?php echo $row['s_id'];?>"><?php echo $row['student_name'];?></td>
  <td id="seatno<?php echo $row['s_id'];?>"><?php echo $row['seat_no'];?></td>
  <td id="batch<?php echo $row['s_id'];?>"><?php echo $id;?></td>
  <td id="dept<?php echo $row['s_id'];?>"><?php echo $row['department'];?></td>
  <!-- <td>
   <input type='button' class="edit_button" id="edit_button<?php echo $row['s_id'];?>" value="edit" onclick="edit_row('<?php echo $row['s_id'];?>');">
   <input type='button' class="save_button" id="save_button<?php echo $row['s_id'];?>" value="save" onclick="save_row('<?php echo $row['s_id'];?>');">
   <input type='button' class="delete_button" id="delete_button<?php echo $row['s_id'];?>" value="delete" onclick="delete_row('<?php echo $row['s_id'];?>');">
  </td> -->
  <td>
   <input type='button' class="edit_button btn btn-primary  btn-xs edit p-2 " id="edit_button<?php echo $row['s_id'];?>" value="edit" onclick="edit_row('<?php echo $row['s_id'];?>');"> 
   <input type='button' class="save_button btn btn-success btn-xs save p-2" id="save_button<?php echo $row['s_id'];?>" value="save" onclick="save_row('<?php echo $row['s_id'];?>');">
   <button type='button' class="delete_button btn btn-danger btn-xs delete p-2" id="delete_button<?php echo $row['s_id'];?>" value="delete" onclick="delete_row('<?php echo $row['s_id'];?>');">Delete</button>
  </td>
 </tr>
 <?php
}
?>

 <tr id="new_row">
<input  type='hidden'  id="new_batch" value='<?php echo $id;?>'>
<input  type='hidden'  id="new_dept" value='<?php echo $dept;?>'>
 <td><input class='form-control' type="text"  id="new_sname"></td>
 <td><input class='form-control' type="text" id="new_seatno"></td>
 <td ><?php echo $id;?></td>
 <td ><?php echo $dept;?></td>

 <td><input class='insert_button btn btn-info btn-xs insert ' type="button "  value="Insert Row" onclick="insert_row();"></td>
</tr> 
<!-- 
<tr>
<td><input type="text" id="new_name"></td>
<td><input type="text" id="new_country"></td>
<td><input type="text" id="new_age"></td>
<td><input type="button" class="add" onclick="add_row();" value="Add Row"></td>
</tr> -->
</tbody>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</body>


   <!-- Jquery JS-->
   
   <script src="../../../../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <!-- <script src="../../../../assets/vendor/bootstrap-4.1/popper.min.js"></script> -->
    <!-- <script src="../../../../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script> -->
 <!-- Bootstrap JS-->
 <!-- <script src="../../../../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../../../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script> -->
      
    </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
 
    <!-- Main JS-->
    <!-- <script src="../../../../assets/js/main.js"></script> -->

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">

function edit_row(id)
{

//  var batch=document.getElementById("batch"+id).innerHTML;
 var sname=document.getElementById("sname"+id).innerHTML;
 var seatno=document.getElementById("seatno"+id).innerHTML;
 var batch=document.getElementById("batch"+id).innerHTML;
console.log(batch);
  // document.getElementById("batch"+id).innerHTML="<input type='text' id='batch"+id+"' value='"+batch+"'>";
 document.getElementById("sname"+id).innerHTML="<input class='form-control'  type='text' id='sname_text"+id+"' value='"+sname+"'>";
 document.getElementById("seatno"+id).innerHTML="<input class='form-control'  type='text' id='seatno_text"+id+"' value='"+seatno+"'>";
 document.getElementById("batch"+id).innerHTML="<input class='form-control'  type='text' id='batch"+id+"' value='"+batch+"'>";
//  document.getElementById("batch"+id).innerHTML="<input type='text' id='batch"+id+"' value='"+batch+"'>";
//  document.getElementById("batch"+id).innerHTML="<input class='form-control'  type='text' id='batch_text"+id+"' value='"+batch+"'>";
//  document.getElementById("seatno"+id).innerHTML="<input class='form-control'  type='text' id='seatno_text"+id+"' value='"+seatno+"'>";
	// console.log(b);
 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}

function save_row(id)
{
  var batch="<?php echo $id;?>";
 var sname=document.getElementById("sname_text"+id).value;
 var seatno=document.getElementById("seatno_text"+id).value;
//  var seatno=document.getElementById("seatno_text"+id).value;
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   edit_row:'edit_row',
 
   row_id:id,
   batch:batch,
   sname:sname,
   seatno:seatno
  },
  success:function(response) {
   if(response=="success")
   {

    
   
    console.log(batch);
    document.getElementById("sname"+id).innerHTML=sname;
    document.getElementById("seatno"+id).innerHTML=seatno;
    document.getElementById("batch"+id).innerHTML=batch;
    document.getElementById("edit_button"+id).style.display="block";
    document.getElementById("save_button"+id).style.display="none";
   }
  }
 });
}

function delete_row(id)
{
  var batch="<?php echo $id;?>";
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   delete_row:'delete_row',
   row_id:id,
   batch:batch,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);

    // console.log(batch);
   }
  }
 });
}


function insert_row()
{
  var dept=document.getElementById("new_dept").value;
  var batch=document.getElementById("new_batch").value;
  // var nbatch=document.getElementById("n_batch").value;
 var sname=document.getElementById("new_sname").value;
 var seatno=document.getElementById("new_seatno").value;

 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
  insert_row:'insert_row',
  sname:sname,
  seatno:seatno,
  newbatch:batch,
  newdept:dept,
  },
  success:function(response) {
   if(response!="")
   {
    var id=response;
    var table=document.getElementById("user_table");
    var table_len=(table.rows.length)-1;
    // var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='name_val"+id+"'>"+name+"</td><td id='age_val"+id+"'>"+age+"</td><td><input type='button' class='edit_button' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";
    var row = table.insertRow(table_len).outerHTML="<tr id='row"+id+"'><td id='sname"+id+"'>"+sname+"</td><td id='seatno"+id+"'>"+seatno+"</td><td>"+batch+"</td><td>"+dept+"</td><td><input type='button' class='edit_button btn btn-primary  btn-xs edit mr-2' id='edit_button"+id+"' value='edit' onclick='edit_row("+id+");'/><input type='button' class='save_button btn btn-success btn-xs save p-2' id='save_button"+id+"' value='save' onclick='save_row("+id+");'/><input type='button' class='delete_button btn btn-danger btn-xs delete ml-2' id='delete_button"+id+"' value='delete' onclick='delete_row("+id+");'/></td></tr>";
    
    
    
    // document.getElementById("new_batch").innerHTML;
    // document.getElementById("new_batch").value="";
    document.getElementById("new_sname").value="";
    document.getElementById("new_seatno").value="";




   }
  }
 });
}

</script>
</html>
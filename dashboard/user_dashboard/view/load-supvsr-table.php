
<html >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gradinf_FYDP --FYP RUBRIC Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"  rel="stylesheet"  />
    

    <link href="../../../../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="../../../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Vendor CSS-->
    <!-- <link href="../../../../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    -->

     

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>  -->
 <!-- Main CSS-->
    <link href="../../../../assets/css/theme.css" rel="stylesheet" media="all">

<!-- 
<div id="wrapper"> -->

<div class="container" style="margin-top:50px;" id="wrapper">
<div class="row">
 <div class="col-lg">
    <h2 class="title-1 m-b-25"></h2>
<div class="table-responsive table--no-card m-b-50">
 <div class="card-body p-3">
    <div>
    <h2>Supervisor</h2>
    </div>
<!-- <?php

// $connect=mysqli_connect('localhost','root','','rubric');

// $sql="SELECT * FROM batch20";
// $select =mysqli_query($connect, $sql);
// $id='batch20';
?> -->




<?php

$connect=mysqli_connect('localhost','root','','rubric');
$id=$_POST['id'];
$sno=1;
$query=("SELECT * FROM $id");
$select =mysqli_query($connect,$query);
?>
<form action="" method=POST>
<table class="table  table-earning" id="user_table">
<!-- <input  type="hidden" name="id" class="txtField"  value="batch20">  -->
<!-- <table align="center" cellpadding="10" border="1" id="user_table"> -->
    
<tr>
  <thead>
  <th>Sno.</th>
<th>Student Name</th>
<th>Seat No.</th>

</thead>
<tbody>
</tr>
<?php
while ($row=mysqli_fetch_array($select)) 
{
 ?>
 <tr id="row<?php echo $row['s_id'];?>">
 <input id="batch" type="hidden" name="<?php echo $id;?>">
 
 <td><?php echo $sno++;?></td>
  <td id="name_val"><?php echo $row['student_name'];?></td>
  <td id="age_val"><?php echo $row['seat_no'];?></td>
  <!-- <td>
   <input type='button' class="edit_button" id="edit_button<?php echo $row['s_id'];?>" value="edit" onclick="edit_row('<?php echo $row['s_id'];?>');">
   <input type='button' class="save_button" id="save_button<?php echo $row['s_id'];?>" value="save" onclick="save_row('<?php echo $row['s_id'];?>');">
   <input type='button' class="delete_button" id="delete_button<?php echo $row['s_id'];?>" value="delete" onclick="delete_row('<?php echo $row['s_id'];?>');">
  </td> -->
  
 </tr>
 <?php
}
?>


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

</body>


   <!-- Jquery JS-->
   <script src="../../../../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <!-- <script src="../../../../assets/vendor/bootstrap-4.1/popper.min.js"></script> -->
    <!-- <script src="../../../../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script> -->
 <!-- Bootstrap JS-->
 <script src="../../../../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../../../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
      
    </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
 
    <!-- Main JS-->
    <!-- <script src="../../../../assets/js/main.js"></script> -->


</html>
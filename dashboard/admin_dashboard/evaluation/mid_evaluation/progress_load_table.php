<?php
$conn=mysqli_connect('localhost','root','','rubric');
$id=$_POST['id'];
$batch=$_POST['batch'];
$dept=$_POST['dept'];
$sql = "SELECT * FROM rubric WHERE project_id  = '{$_POST['id']}' and batch='$batch' and department='$dept' ";
$result=mysqli_query($conn,$sql);
$sno=1;




?>

<html >
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gradinf_FYDP --FYP RUBRIC Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"  rel="stylesheet"  />
    
    <title>FYDP RUBRIC</title>
    <link href="../../../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
   
    <link href="../../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
   
    <link href="../../assets/css/theme.css" rel="stylesheet" media="all">
     

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script> 
 <!-- Main CSS-->
   
</head>
<body>

<div class="container col-lg" style="width:100%">
<div class="row ">
   <div class="  col-lg">
      <h2 class="title-1 m-b-25"></h2>
     <div class="table-responsive table--no-card m-b-50">
<div class='card-body p-3'>                         
   <!-- <div class="p-2 ">
<form method='post' action='pdf.php'>
<input name="id" id="projectID"   value="<?php echo $row['project_id']?>">
                <input  name='a' value="<?php echo $row['student_name']?>">
                <input name='x' value="<?php echo $row['seat_no']?>">
                <input  name='batch' value="<?php echo $row['batch']?>">
    <button name='pdf' class='btn btn-primary btn-md float-left ml-2 mt-3'>PDF</button>
</form>
</div>	 -->
  <!-- <table class="table table-striped"> -->
      <form  action='evaluation.php' name='f1' method='POST' id="cart">

      <h5 class='text-center p-2'>CS-406 Computer Engineering Project</h5>
      <h4 class='text-center p-2'>Grading of Final Report (7th/Spring Semester) (Weightage - 24%)</h4>
      <!-- <button name='pdf' class='btn btn-primary btn-md float-left ml-2 mt-3' action=''>PDF</button> -->
  <!-- <table name="cart" class="table table-striped"  style="border-radius: 2%; text-align: center; vertical-align: middle; padding: 10px;"> -->
  <table class="table table-borderless table-striped table-earning text-center" name="cart" >
  <thead >
  <tr>
  <th scope="row" >S.No</th>
  <th scope="row" >Student Name</th>
  <th scope="row" >Seat no.</th>
  <th scope="row" >I<br>Intellectual Contribution <br> (5)</th>
  <th scope="row" >II<br>Attendance <br> (5)</th>
  <th scope="row" >III<br>Coherence with group <br> (5)</th>
  <th scope="row" >IV<br>Response to Questions<br> (5)</th>
  <th scope="row" >Weighted Average Score <br> (20)</th>

</tr>
<tr>
<th scope="row" ></th>
<th scope="row" ></th>
<th scope="row" ></th>
<th scope="row" >PLO-2(%)</th>
<th scope="row" >PLO-8(%)</th>
<th scope="row" >PLO-9(%)</th>
<th scope="row" >PLO-10(%)</th>
<th scope="row" > </th>
</tr>
</thead>
		<tbody>
			<?php while($row=mysqli_fetch_assoc($result)){ ;
              ?>
                
			<tr class="line_items">
                
                <td><?php echo $sno++;?></td>
                <!-- <input type="hidden" name="userid" class="txtField" value="<?php echo $row['project_id']; ?>"> -->
				<td>  <input type="hidden" name="projectID[]" id="projectID"   value="<?php echo $row['project_id']?>"> <?php echo $row['student_name']?></td>
                <input type="hidden" name='a[]'   id='sname' value="<?php echo $row['student_name']?>">
                <input type="hidden" name='x[]' id='seat_no' value="<?php echo $row['seat_no']?>">
                <input type="hidden" name='batch' value="<?php echo $row['batch']?>">
                <td><?php echo $row['seat_no']?></td>
				<td class = "select1 "  required>
                        <div class="form-group" style="padding: 10px 0px;">
                            <div class="fxt-transformY-50 fxt-transition-delay-2">
                                
                            <select id="sum1"  class="form-control" name='s1[]'  required>
                                        <option value="">Select Category: </option>
                                        <option value="0">0 </option>
                                        <option value="25">25</option>
                                        <option value="50"> 50</option>
                                        <option value="75">75</option>
                                        <option value="100"> 100</option></select>
                                </div>
                                </div>
                    </td>
   

                    <td class = "select2" >
                            <div class="form-group" style="padding: 10px 0px;" >
                                <div class="fxt-transformY-50 fxt-transition-delay-2">
                                    
                                    <select id="sum2"  class="form-control" name='s2[]'   required>
                                        <option>Select Category: </option>
                                        <option value="0">0 </option>
                                        <option value="25">25</option>
                                        <option value="50"> 50</option>
                                        <option value="75">75</option>
                                        <option value="100"> 100</option></select>
                                    </div>
                                    </div>
                        </td>
                        <td class = "select3">
                            <div class="form-group" style="padding: 10px 0px;">
                                <div class="fxt-transformY-50 fxt-transition-delay-2">
                                    
                                <select id="sum3"  class="form-control" name='s3[]' required>
                                        <option>Select Category: </option>
                                        <option value="0">0 </option>
                                        <option value="25">25</option>
                                        <option value="50"> 50</option>
                                        <option value="75">75</option>
                                        <option value="100"> 100</option></select>
                                    </div>
                                    </div>
                        </td>
                        <td class = "select4">
                            <div class="form-group" style="padding: 10px 0px;">
                                <div class="fxt-transformY-50 fxt-transition-delay-2">
                                    
                                <select id="sum4"  class="form-control" name='s4[]' required>
                                        <option>Select Category: </option>
                                        <option value="0">0 </option>
                                <option value="25">25</option>
                                        <option value="50"> 50</option>
                                        <option value="75">75</option>
                                        <option value="100"> 100</option></select>
                                    </div>
                                    </div>
                        </td>

      
      <td> 
        <div class="form-group" style="padding: 10px 0px;">
          <div class="fxt-transformY-50 fxt-transition-delay-2">
         <input type="number" name="item_total"  id="item_total"  value="" jAutoCalc="{s1} + {s2} + {s3} + {s4}">

      </div>
  </div>
  </td>

			</tr>
            
         
			<?php  }?>
            
		</thead>
	  </table>
      <!-- <button type="submit" name="pdf"  value="pdf" class="btn btn-primary btn-lg ml-2 float-right">PDF</button> -->
      <!-- class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-3 rounded mx-auto" -->
     <div class=" py-2 px-4  " align="center">
      <button  class="btn btn-primary btn-lg ml-2 mt-3"  type='submit' name='1st_progress_submit' id='submit' onclick='pdf()' >SUBMIT</button>
        
      </div>
      <div>
        <p style="font-family:'Time New Roman'">Use Rubric FYDP-OBE-01 for each student.<br>
Average percentage score from the rubrics filled by supervisor and examiner shall be placed in the above table.<br>
<strong> <em>Weighted Average Score = [PLO-2 (%)*5+ PLO-8 (%)*5+ PLO-9 (%)*5+ PLO-10 (%)*5]/100  </em></strong></p>
      </div> </div> </div> </div>   
      </div>
     
    </form>
   </div>	
</body>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
<script>
  


$(function() {

function autoCalcSetup() {
  $('form#cart').jAutoCalc('destroy');
  $('form#cart tr.line_items').jAutoCalc({keyEventsFire: true, decimalPlaces: 3,  emptyAsZero: true});//decimalPlaces: 3,
  $('form#cart').jAutoCalc({decimalPlaces: 3});
}
autoCalcSetup();


});


</script>
</html>
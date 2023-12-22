<?php

$conn = mysqli_connect("localhost","root","","rubric") or die("Connection failed");


session_start();
if(!ISSET($_SESSION['Login'])){

}

   
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

      <!-- Fontfaces CSS-->
      <link href="../../../../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">


    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
    <link href="../../../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../../../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../../../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> -->
	<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>  -->
    <!-- Main CSS-->
    <link href="../../../../assets/css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                    <a class="logo" href="../../index.php">
                          
                            <i class="fas fa-book me-5"> FYP RUBRIC</i>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                    <a class="js-arrow" href="../../index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        
                        <li>
                            <a href="c.php">
                            <i class="fas  fa-pencil-square"></i>Batch</a>
                        </li>
                        <!-- <li>
                            <a href="../../form/form.php">
                            <i class="fas  fa-pencil-square"></i>Form</a>
                            </li> -->


                        <!-- <li>
                        <a href="../../create_fyp_rubric/create_fyp_rubric.php">
                            <i class="fas  fa-pencil-square"></i>Create FYDP</a>
                        </li> -->
                        <li>
                            <a href="../../evaluation/evaluation.php">
                            <i class="fas  fa-pencil-square"></i>Evaluation</a>
                        </li>
                        <li>
                            <a href="../../view/view.php">
                            <i class="fas  fa-pencil-square"></i>View</a>
                        </li> 
                    
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="">
              
                    <!-- <img src="images/icon/logo.png" alt="FYDP RUBRIC" /> -->
                


                    <a class="logo" href="../../index.php">
         <i class="fas fa-book me-5"> FYP RUBRIC</i></a>
         
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                            <a class="js-arrow" href="../../index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
                        <li>
                            <a href="c.php">
                            <i class="fas  fa-pencil-square"></i>Batch</a>
                        </li>
                        <!-- <li>
                            <a href="../../form/form.php">
                            <i class="fas  fa-pencil-square"></i>Form</a>
                            </li> -->
                       
            
                        <!-- <li>
                            <a href="../../create_fyp_rubric/create_fyp_rubric.php">
                            <i class="fas  fa-pencil-square"></i>Create FYDP</a>
                        </li> -->
                        <li>
                            <a href="../../evaluation/evaluation.php">
                            <i class="fas  fa-pencil-square"></i>Evaluation</a>
                        </li>
                        <li>
                            <a href="../../view/view.php">
                            <i class="fas  fa-pencil-square"></i>view</a>
                        </li> 
                    
                    
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                        <div id='animated'><a href="https://ncbc.neduet.edu.pk/">
                        <h6>Powered by  National Center in Big Data and Cloud Computing (NCBC)</h6></a>
                        </div>
                        <!-- //search bar -->
                            <!-- <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form> -->



                            <div class="header-button">
                                <div class="noti-wrap">
                            
                              
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <!-- <img src="images/icon/avatar-01.jpg" alt="John Doe" />x -->
                                        </div>
                                        <div class="content">

                                            <a class="js-acc-btn" href="#"> 
                                                
                                                <?php

                                        $conn=mysqli_connect('localhost','root','','rubric');
                                            $sql="SELECT * FROM `admin` WHERE  admin_email = '$_SESSION[Login]'";
                                            $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
                                            $str = "";
                                            while($row = mysqli_fetch_assoc($query)){
 
                                                $str .=$row['admin_email'];
                                            }
                                            echo $str;
                                           ?>
                                            
                                        
                                        
                                        
                                         </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <!-- //session start -->
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php

                                                            $conn=mysqli_connect('localhost','root','','rubric');
                                                                $sql="SELECT * FROM `admin` WHERE  admin_email = '$_SESSION[Login]'";
                                                                $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
                                                                $str = "";
                                                                while($row = mysqli_fetch_assoc($query)){

                                                                    $str .=$row['admin_email']."";

                                                                }
                                                                echo $str;
                                                            ?></a>
                                                    </h5>
                                                    <span class="email"><?php
                                                    $sql="SELECT * FROM `admin` WHERE  admin_email = '$_SESSION[Login]'";
                                                                $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
                                                                $str = "";
                                                                while($row = mysqli_fetch_assoc($query)){

                                                                    $str .=$row['admin_email']."";

                                                                }
                                                                echo $str;
                                                            ?></span>
                                                </div>
                                            </div>
                                         
                                            <div class="account-dropdown__footer">
                                            <a href="#">
                                                <form action="../../../../login.php" method=post>
                                                    <div>
                                               
                                                    <i class="zmdi zmdi-power" ></i><button  type="submit" name='logout'> Logout</button>
                                                    </div>
                                                </form>
                                        </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-xl">





                            <div class="overview-wrap ">
                                    <h2 class="title-1 p-6"></h2>
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                                <div class="card px-6">
                                 
                             


                                    <div class="card-body">

                                    <div class="default-tab">
											<nav>
												<div class="nav nav-tabs" id="nav-tab" role="tablist">
												
													
                                                     <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#create_fydp" role="tab" aria-controls="nav-profile"
													 aria-selected="false">Create FYDP</a>
                                                     <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#update_record" role="tab" aria-controls="nav-profile"
													 aria-selected="false">Insert/update record</a>
												</div>
											</nav>




											<div class="tab-content pl-3 pt-2" id="nav-tabContent">
												
                                     <!--------------------UPDATE-RECORDS-------------------->
                                     <div >

<?php
if(isset($_SESSION['message']))
{
    if($_SESSION['message']='Successfully Imported'){
    echo "<h4 class='alert alert-success alert-dismissible fade show' id='alert' role='alert'>".$_SESSION['message']."</h4>";
    unset($_SESSION['message']);
    }
    else{
        echo "<h4 class='alert alert-danger alert-dismissible fade show' role='alert'>".$_SESSION['message']."</h4>";
        unset($_SESSION['message']);
    }
}
?>

</div>
                                     
                                          <div class="tab-pane fade" id="update_record" role="tabpanel" aria-labelledby="nav-profile-tab">
                                          <div class="card px-6">


                                          
                                  <div class="card-body">

                                  <hr>
                                  <nav >
												<div class="nav nav-tabs" id="nav-tab" role="tablist">
												<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#import" role="tab" aria-controls="nav-profile"
													 aria-selected="false">Automation</a>
													<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#manually" role="tab" aria-controls="nav-profile"
													 aria-selected="false">Manually</a>
                                                     
												</div>
											</nav>
                                  <!-- <h2>Import Excel File into MySQL Database using PHP</h2> -->
                                  <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                  <div class="tab-pane fade" id="import" role="tabpanel" aria-labelledby="nav-profile-tab">
<div class="col-14 col-md-6">

   <h4 class='py-4'>Import Excel File</h4>
<div class='p-4'>
   <h6 class='py-2'>Standard Excel Format</h6>
   Download the template file, data must be in this format
  <a href="../../../../assets/file/template.xlsx"> <i class="fa fa-download px-2">Template File</a></i>

   </div>
   <form action="import.php" method="POST" enctype="multipart/form-data">

  
        <div class='col-12 col-md-6'>
            <label>Choose Excel File
            <input type="file" name="import_file" class="form-control" />
           <button name="save_excel_data" class="btn btn-primary mt-3">Import</button>
</label>
        </div>

    </form>

    </div>

</div>



<div class="tab-pane fade" id="manually" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="col-14 col-md-6">
    
        <hr>
        <h4 class='py-2'>You can also update or insert data manually </h4><hr>
     <br>
                                       <form action="" method="post" novalidate="novalidate" >
                                       <div class="col-14 col-md-6">
     
                                       <label for="cc-payment" class="control-label mb-1">Department</label>
                                       <select class="form-control p-2" id='dept'  name="dept_name"  required>
                                                                            <option value='' >Select Department</option>
                                                                            <?php
                                                  
                                                                            $sql = "SELECT dept_name FROM `department` ";
                              
                                                                            $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
                                                                        
                                                                            $a = "";
                                                                            while($row = mysqli_fetch_assoc($query)){
                                                                              $a .= "<option value='{$row['dept_name']}'>{$row['dept_name']}</option>";
                                                                            }
                                                                            echo $a;
                                                                          
                                                                          ?> 
                                                                    
                                                                        </select>
                                               </div>
                                       <div class="col-12 col-md-6"><br>
                                     <label for="cc-payment" class="control-label mb-1">year</label>
                                     <select class="form-control p-2" name='year' id='year' required></select>
                                                         </select>
                                                     </div>
                                                  
                                                     <div id="table-batch-data"></div>
                                                 </form>
    
        </div>
    
    </div>







</div>


                                  </div>
                            </div>
                            </div>




                            <div class="tab-pane fade" id="create_fydp" role="tabpanel" aria-labelledby="nav-contact-tab">


                          <div class="p-4">       <!--Manually data insert div start -->
                         <div class="card px-6">


                                          
                                <div class="card-body">
                                <h1 class=' title-1 py-2'>Create Final year Design Project</h1>
                                <hr>
                               <!-- <?php// include 'fydp/fydp.php'; ?> -->
                               <form method="post" class='needs-validation'>
                                
                            <div class=" flex-row   ">
                            <span id="error1"></span>
                         
              
        
                <div class=" mt-4 text-sm px-2">
                <label class="block text-sm  ">
                <span class="text-gray px-3"> DEPARTMENT:</span>
                <select id="dept1" name='dept' required  class=" form-control-sm   border-bottom" >
                    <option value="" >-----Select Department-----</option>
                 </select>
                </label>

                <label class="block text-sm  ">
                <span class="text-gray px-2">BATCH:</span> 
                <select id='batch1'  name="batch" required  class="form-control-sm border-bottom" >
            </select>
          </label>
           
          </div> 
         
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md " id= 'table-data'  > </div>
          </form>
           </div>
           </div> 
           </div>
         </div>
         </div> 
        <!-- abc -->
                                        
         <hr>
                                
     
        </div>
         </div>
         </div>
         </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2023 <a href="https://ncbc.neduet.edu.pk/">NCBC</a>. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    </body>

</html>

   <!-- Jquery JS-->
   <script src="../../../../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../../../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../../../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../../../vendor/slick/slick.min.js">
    </script>
    <script src="../../../../assets/vendor/wow/wow.min.js"></script>
    <script src="../../../../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../../../../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../../../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../../../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../../../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../../../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../../../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../../../assets/vendor/select2/select2.min.js">
      
    </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
 
    <!-- Main JS-->
    <script src="../../../../assets/js/main.js"></script>
    <script src='create.js'></script>
      
    <script>
$('#animated').addClass('animated fadeInDown');
window.onload = function () {
        //Reference the DropDownList.
        var ddlYears = document.getElementById('year');

        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();

        //Loop and add the Year values to DropDownList.
        for (var i = 2010; i <= currentYear; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
    };
    





$(document).ready(function(){

    
  $("#year").change(function(){
        var id = $(this).val();
        var dept = $('#dept').val();
        if(id == ""){
          $("#table-batch-data").html("");
        }else{
          $.ajax({
            // url : "load-batch-table.php",
            url : "../update_batch/update_batch.php",
            type : "POST",
            data : { id : id , dept:dept},
            success : function(data){
              $("#table-batch-data").html(data);
              
            }
          });
        }
      })
//           $("#supervisor").change(function(){
//              $.ajax({
//             url : "supervisor.php",
//             type : "POST",
//             success : function(data){
//              $("#supervisor").apened(data);
//        }
//      });
  
//  })
// $(document).ready(function(){
//     $("#supervisor").click(function(){
//         $("#supervisor").load("supervisor.php");
//     });
// });

  
    //       $(function(){
    //     var validation_el = $('<div>')
    //         validation_el.addClass('validation-err alert alert-danger my-2')
    //         validation_el.hide()
    //     $('input[name="pid"]').on('input',function(){
    //         var code = $(this).val()
    //             $(this).removeClass("border-danger border-success")
    //             $(this).siblings(".validation-err").remove();
    //         var err_el = validation_el.clone()

    //             if(code == '')
    //             return false;

    //             $.ajax({
    //                 url:"validate.php",
    //                 method:'POST',
    //                 data:{code:code},
    //                 dataType:'json',
    //                 error:err=>{
    //                     console.error(err)
    //                     alert("An error occured while validating the data")
    //                 },
    //                 success:function(resp){
    //                     if(Object.keys(resp).length > 0 && resp.field_name == 'code'){
    //                         err_el.text(resp.msg)
    //                         $('input[name="pid"]').addClass('border-danger')
    //                         $('input[name="pid"]').after(err_el)
    //                         err_el.show('slideDown')
    //                         $('test.php #submit').attr('disabled',true)
                           
    //                     }else{
    //                         $('input[name="code"]').addClass('border-success')
    //                         $(' test.php #submit').attr('disabled',false)
    //                     }
    //                 }
    //             })
    //     })

    // })


    $("#error1").load("test.php #error");
    $( "#alert" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 400 );


  
        });


   


</script>



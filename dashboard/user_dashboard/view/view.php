


<?php

$conn = mysqli_connect("localhost","root","","rubric") or die("Connection failed");


session_start();
if(!ISSET($_SESSION['user_Login'])){

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

    <!-- Title Page-->
    <title>FYDP RUBRIC</title>

    <!-- Fontfaces CSS-->
    <link href="../../../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
    <link href="../../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../../assets/css/theme.css" rel="stylesheet" media="all">

</head>     

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                    <a class="logo" href="../user.php">
                            <!-- <img src="images/icon/logo.png" alt="FYDP RUBRIC" /> -->
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
                            <a class="js-arrow" href="../user.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <!-- <li>
                            <a href="../batch/create/c.php">
                            <i class="fas  fa-pencil-square"></i>Batch</a>
                            </li> -->
                   
            
                            <li>
                            <a href="../user_evaluation/evaluation.php">
                            <i class="fas  fa-pencil-square"></i>Evaluation</a>
                        </li>
                     
                            <li>
                            <a href="view.php">
                            <i class="fas  fa-pencil-square"></i>view</a>
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
          


              <a class="logo" href="../user.php">
   <i class="fas fa-book me-5"> FYP RUBRIC</i></a>
   
      </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                            <a class="js-arrow" href="../user.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
                        <!-- <li>
                            <a href="../batch/create/c.php">
                            <i class="fas  fa-pencil-square"></i>Batch</a>
                            </li> -->
                        <!-- <li>
                            <a href="create_fyp_rubric.php">
                            <i class="fas  fa-pencil-square"></i>Create FYDP</a>
                        </li> -->
            
                        <li>
                            <a href="../user_evaluation/evaluation.php">
                            <i class="fas  fa-pencil-square"></i>evaluation</a>
                        </li>
                        <li>
                            <a href="view.php">
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
                                            $sql="SELECT * FROM `user` WHERE  user_name = '$_SESSION[user_Login]'";
                                            $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
                                            $str = "";
                                            while($row = mysqli_fetch_assoc($query)){

                                                $str .=$row['user_name'];
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
                                                            $sql="SELECT * FROM `user` WHERE  user_name = '$_SESSION[user_Login]'";
                                                            $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
                                                            $str = "";
                                                            while($row = mysqli_fetch_assoc($query)){

                                                                $str .=$row['user_name']."";

                                                            }
                                                            echo $str;
                                                        ?></a>
                                                                                                            </h5>
                                                                                                            <span class="email"><?php
                                                    $sql="SELECT * FROM `user` WHERE  user_name = '$_SESSION[user_Login]'";
                                                                $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
                                                                $str = "";
                                                                while($row = mysqli_fetch_assoc($query)){

                                                                    $str .=$row['user_email']."";

                                                                }
                                                                echo $str;
                                                            ?></span>
                                                </div>
                                            </div>
                                         
                                            <div class="account-dropdown__footer">
                                            <a href="#">
                                                <form action="../../../login.php" method=post>
                                               
                                                    <i class="zmdi zmdi-power" ></i><button  type="submit" name='logout'> Logout</button>
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
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                 
                  
                        </div>
                      
                        <div class="row">
                            <div class="col-lg">
                                
                               
                                <div>
                                
                                    <div class="  px-4 py-3 mb-8 bg-white rounded-lg shadow-md "  >
                                    <div class="card">
                                    <div class="card-header">
                                        <!-- <h2>Select batch</h2> -->
                                        <div>
                                        <h2 class="title-1 m-b-25">View Details</h2>
                                        <form method= 'postx'>
                                        <!-- <div class="col col-md-9">
                                            <label for="">Select Batch:</label>
                                                    <select id='batch'  name="batch" class="form-control">
                                                       <option value=""><----Select Batch----></option> 
                                                    <!-- </select> -->
                                                   
                                                <!-- </div> -->
                                                
                                                <div class=" mt-4 text-sm px-5"> 

            <label class="block text-sm  ">
                <span class="text-gray px-4"> DEPARTMENT:</span>
                <select id="dept" name='dept' required  class="form-control-sm   border-bottom " >
                    <option value="">-----Select Department-----</option>

                </select>
                <!-- <input class="form-input  border-bottom "  id="dept" name='dept' required /> -->
              </label>




            <label class="block text-sm  ">
                <span class="text-gray px-4">BATCH:</span> 
                <select id='batch'  name="batch"  class=" form-control-sm  border-bottom ">
                                                    <!-- <option value=""><----Select Batch----></option> 
                                                    </select>
                <!-- <input class="form-input  border-bottom "  id="batch" name='batch' required  /> -->
              </label>
               
            <!-- </div>

            <div class=" mt-4 text-sm px-5">  -->
         
            </div>
                                            </form>

</div>

                               
                                      
                                        
                                               
                                             
        
<!--     
     <div id="table-supervisor"></div> -->



     </div>
     
</div>
<div class="col-lg" id="table-data"></div>
        </div>
         
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

    <!-- Jquery JS-->
    <script src="../../../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../../vendor/slick/slick.min.js">
    </script>
    <script src="../../../assets/vendor/wow/wow.min.js"></script>
    <script src="../../../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../../../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../../assets/vendor/select2/select2.min.js">
      
    </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
 
    <!-- Main JS-->
    <script src="../../../assets/js/main.js"></script>

</body>

</html>
<!-- end document-->

</body>
</html>
  
<script>
    $(document).ready(function(){
  	
        $('#animated').addClass('animated fadeInDown');
    
 






$(document).ready(function(){
  	function loadData(type, id){
  		$.ajax({
  			url : "dept_batch.php",
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


    $("#batch").change(function(){
     var batch = $(this).val();
     var dept = $('#dept').val();
     console.log(batch);
     if(batch == ""){
       $("#table-data").html("");
     }else{
       $.ajax({
         url : "load-batch-table.php",
         type : "POST",
         data : { batch :batch, dept:dept},
         success : function(data){
           $("#table-data").html(data);
         }
       });
     }
   })


    
});

    });












</script>

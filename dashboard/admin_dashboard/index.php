



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

    <!-- Title Page-->
    <title>FYDP RUBRIC</title>

    <!-- Fontfaces CSS-->
    <link href="../../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                    <a class="logo" href="index.php">
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
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="batch/create/c.php">
                            <i class="fas  fa-pencil-square"></i>Batch</a>
                        </li>
                        <!-- <li>
                            <a href="form/form.php">
                            <i class="fas  fa-pencil-square"></i>FORM</a>
                        </li> -->
            
                        <!-- <li>
                            <a href="create_fyp_rubric/create_fyp_rubric.php">
                            <i class="fas  fa-pencil-square"></i>Create FYDP</a>
                        </li> -->
                        <li>
                            <a href="evaluation/mid_evaluation.php">
                            <i class="fas  fa-pencil-square"></i>Evaluation</a>
                        </li>
                        <li>
                            <a href="view/view.php">
                            <i class="fas  fa-pencil-square"></i>View</a>
                        </li>
                    
                 
                 
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
        <div class="">
              
              <!-- <img src="images/icon/logo.png" alt="FYDP RUBRIC" /> -->
          


              <a class="logo" href="index.php">
   <i class="fas fa-book me-5"> FYP RUBRIC</i></a>
   
      </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
                        <li>
                            <a href="batch/create/c.php">
                            <i class="fas  fa-pencil-square"></i>Batch</a>
                        </li>
                        <!-- <li>
                            <a href="form/form.php">
                            <i class="fas  fa-pencil-square"></i>Form</a>
                        </li> -->
                        <!-- <li>
                            <a href="create_fyp_rubric/create_fyp_rubric.php">
                            <i class="fas  fa-pencil-square"></i>Create FYDP</a>
                        </li> -->
                        <li>
                        <a href="evaluation/evaluation.php">
                            <i class="fas  fa-pencil-square"></i>Evaluation</a>
                        </li>
                   
                        <li>
                            <a href="view/view.php">
                            <i class="fas  fa-pencil-square"></i>View</a>
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
                    <div class="header-wrap " >
                    <div id='animated'><a href="https://ncbc.neduet.edu.pk/">
<h6>Powered by  National Center in Big Data and Cloud Computing (NCBC)</h6></a>
</div>


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
                                                <form action="../../login.php" method=post>
                                               
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
                                    <h2 class="title-1">overview</h2>
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25 ">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                                $sql=mysqli_query($conn, 'SELECT student_name from rubric');
                                                if($sql){
                                                $row=mysqli_num_rows($sql); 
                                            if($row)
                                        echo $row;
                                        }

                                                ?></h2>
                                                <span>Students</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <!-- <canvas id="widgetChart1"></canvas> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                            <i class="zmdi zmdi-delicious zmdi-hc-lg"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                                $sql=mysqli_query($conn, 'SELECT distinct(fyp_title) from rubric');
                                                if($sql){
                                                $row=mysqli_num_rows($sql); 
                                            if($row)
                                        echo $row;
                                        }

                                                ?></h2>
                                                <span>Project</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <!-- <canvas id="widgetChart2"></canvas> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                            <i class="zmdi zmdi-spinner zmdi-hc-lg"></i>
                                            </div>
                                            <div class="text">
                                                <h2> 
                                                <?php
                                                $sql=mysqli_query($conn, 'SELECT user_name from user');
                                                if($sql){
                                                $row=mysqli_num_rows($sql); 
                                            if($row)
                                        echo $row;
                                        }

                                                ?>
                                                </h2>
                                                <span>Supervisor</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <!-- <canvas id="widgetChart3"></canvas> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6 col-lg-3"> -->
                                <!-- <div class="overview-item overview-item--c4"> -->
                                    <!-- <div class="overview__inner"> -->
                                        <!-- <div class="overview-box clearfix"> -->
                                            <!-- <div class="icon"> -->
                                                <!-- <i class="zmdi zmdi-money"></i> -->
                                            <!-- </div> -->
                                            <!-- <div class="text"> -->
                                                <!-- <h2></h2> -->
                                                <!-- <span>total earnings</span> -->
                                            <!-- </div> -->
                                            <!-- <div class="overview-chart"> -->
                                                <!-- <canvas id="widgetChart4"></canvas> -->
                                            <!-- </div> -->
                                        <!-- </div> -->
                                       
                                    <!-- </div>
                                </div>
                            </div> -->
                        </div>
                      
                        <div class="row">
                            <div class="col-lg">
                                <h2 class="title-1 m-b-25"></h2>
                               
                                <div class="table-responsive table--no-card m-b-90">
                            
                              
                                    
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
    <script src="../../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../../vendor/slick/slick.min.js">
    </script>
    <script src="../../assets/vendor/wow/wow.min.js"></script>
    <script src="../../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../../assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../../assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
// $(document).ready(function(){
//   $("#search").on("keyup", function() {
//     var value = $(this).val().toLowerCase();
//     $("#myTable tr ").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//   });
// });
$('#animated').addClass('animated fadeInDown');









</script>
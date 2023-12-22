



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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script> 
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
                        <li>
                            <a href="../batch/create/c.php">
                            <i class="fas  fa-pencil-square"></i>Batch</a>
                        </li> 
                        <!-- <li>
                            <a href="../form/form.php">
                            <i class="fas  fa-pencil-square"></i>Form</a>
                            </li> -->


                        <!-- <li>
                            <a href="../create_fyp_rubric/create_fyp_rubric.php">
                            <i class="fas  fa-pencil-square"></i>Create FYDP</a>
                        </li> -->
                        <li>
                            <a href="evaluation.php">
                            <i class="fas  fa-pencil-square"></i>Evaluation</a>
                        </li> 
                        <li>
                            <a href="../view/view.php">
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
                        <li>
                            <a href="../batch/create/c.php">
                            <i class="fas  fa-pencil-square"></i>Batch</a>
                        </li> 
                        <!-- <li>
                            <a href="../form/form.php">
                            <i class="fas  fa-pencil-square"></i>Form</a>
                            </li> -->

                        <!-- <li>
                            <a href="../create_fyp_rubric/create_fyp_rubric.php">
                            <i class="fas  fa-pencil-square"></i>Create FYDP</a>
                        </li> -->
                        <li>
                            <a href="evaluation.php">
                            <i class="fas  fa-pencil-square"></i>Evaluation</a>
                        </li> 
                        <li>
                            <a href="../view/view.php">
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
                            
                            <div class="col-xl">

  


                            <div class="overview-wrap ">
                                    
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> -->
                                </div>

                                <div class="card px-6">
                              
                             


                                    <div class="card-body">
                                    <h2 class="title-1 p-6">Evaluation of Final Year Design Project Rubric</h2>
                                        <hr>
                           <div>    
<!-- <button type='button' id='proposal_evaluation'   class='btn btn-primary'>Proposal Rubrics</button>          -->
<button type='button' id='mid_evaluation'  onclick="myfunction()" class='btn btn-primary'>1st Semester Evaluation</button>
<button id='final_evaluation'   class='btn btn-primary' >2nd Semester Evaluation</button>
<button class="float-right p-2" > <a href="../../../assets/file/Rubric.pdf" download>Download Criteria<i class="fa fa-download p-2"></a></i>
 </button>
</div>


<div id='evaluation_form'></div>
<br><hr>
<div>
    
<?php

//         1st Semester Evaluation /////
$conn = mysqli_connect("localhost","root","","rubric") or die("Connection failed");

if (isset($_POST['1st_evaluation_submit'])) {
    // Get the project ID from the form
    $projectIDs = $_POST['projectID']; // Store all project IDs in an array

// echo $projectIDs;

    // Iterate over the submitted form data
    for ($i = 0; $i < count($_POST['projectID']); $i++) {
        // Get the values from the form for each record
        $s1 = $_POST['s1'][$i];
        $s2 = $_POST['s2'][$i];
        $s3 = $_POST['s3'][$i];
        $s4 = $_POST['s4'][$i];
        $seat_no = $_POST['x'][$i];


        $s5=$s1+$s2+$s3+$s4;

// echo $s5;
        // echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM evaluation_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
// echo $count; 
if($count > 0){
    $query="UPDATE `evaluation_rubric` SET `planI`='$s1',`planII`='$s2',`planIII`='$s3',`planIV`='$s4' , `fst_weight` = '$s5'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
   $result= mysqli_query($conn, $query);

   if ($result == true) {
    echo '<div id="alert" class="alert alert-success">
        <strong>Success!</strong> '. $seat_no. ' 1st Semester evaluation has been submitted successfully!
    </div>';
}
}


else{
    $query="INSERT INTO `evaluation_rubric`( `planI`, `planII`, `planIII`, `planIV`, `project_id`, `seat_no`, `fst_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    mysqli_query($conn, $query);
    if ($result == true) {
        echo '<div id="alert" class="alert alert-success">
            <strong>Success!</strong> '. $seat_no. ' first Semester evaluation has been submitted successfully!
        </div>';
    }
}


    }
} 






// --------------------first progress rubric---------------------------//

if (isset($_POST['1st_progress_submit'])) {
    // Get the project ID from the form
    $projectIDs = $_POST['projectID']; // Store all project IDs in an array

// echo $projectIDs;

    // Iterate over the submitted form data
    for ($i = 0; $i < count($_POST['projectID']); $i++) {
        // Get the values from the form for each record
        $s1 = $_POST['s1'][$i];
        $s2 = $_POST['s2'][$i];
        $s3 = $_POST['s3'][$i];
        $s4 = $_POST['s4'][$i];
        $seat_no = $_POST['x'][$i];


        $s5=$s1+$s2+$s3+$s4;

// echo $s5;
//         echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM progress_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
// echo $count; 
if($count > 0){
    $query="UPDATE `progress_rubric` SET `progress_first_planI`='$s1',`progress_first_planII`='$s2',`progress_first_planIII`='$s3',`progress_progress_first_planIV`='$s4' , `progress_first_weight` = '$s5'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
    mysqli_query($conn, $query);
    if ($result == true) {
        echo '<div id="alert" class="alert alert-success">
            <strong>Success!</strong> '. $seat_no. ' 1st Semester Progress has been submitted successfully!
        </div>';
    }
}
else{
    $query="INSERT INTO `progress_rubric`( `progress_first_planI`, `progress_first_planII`, `progress_first_planIII`, `progress_first_planIV`, `project_id`, `seat_no`, `progress_first_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    mysqli_query($conn, $query);
    if ($result == true) {
        echo '<div id="alert" class="alert alert-success">
            <strong>Success!</strong> '. $seat_no. ' First Semester Progress has been submitted successfully!
        </div>';
    }
}


    }
}






///////////// proposal rubric /////////////////////



if (isset($_POST['proposal_rubric_sumbit'])) {
    // Get the project ID from the form
    $projectIDs = $_POST['projectID']; // Store all project IDs in an array

// echo $projectIDs;

    // Iterate over the submitted form data
    for ($i = 0; $i < count($_POST['projectID']); $i++) {
        // Get the values from the form for each record
        $s1 = $_POST['s1'][$i];
        $s2 = $_POST['s2'][$i];
        $s3 = $_POST['s3'][$i];
        $s4 = $_POST['s4'][$i];
        $seat_no = $_POST['x'][$i];


        $s5=$s1+$s2+$s3+$s4;

// echo $s5;
//         echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM proposal_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
// echo $count; 
if($count > 0){
    $query="UPDATE `proposal_rubric` SET `proposal_planI`='$s1',`proposal_planII`='$s2',`proposal_planIII`='$s3',`proposal_planIV`='$s4' , `proposal_weight` = '$s5'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
    mysqli_query($conn, $query);
    if ($result == true) {
        echo '<div id="alert" class="alert alert-success">
            <strong>Success!</strong> '. $seat_no. ' Proposal Rubric has been submitted successfully!
        </div>';
    }
}
else{
    $query="INSERT INTO `proposal_rubric`( `proposal_planI`, `proposal_planII`, `proposal_planIII`, `proposal_planIV`, `project_id`, `seat_no`, `proposal_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    mysqli_query($conn, $query);
    if ($result == true) {
        echo '<div id="alert" class="alert alert-success">
            <strong>Success!</strong> '. $seat_no. ' Proposal Rubric has been submitted successfully!
        </div>';
    }
}


    }
}


/////////////// final Evaluation /////////////////////

if (isset($_POST['final_evalualtion_sumbit'])) {
    // Get the project ID from the form
    $projectIDs = $_POST['projectID']; // Store all project IDs in an array

// echo $projectIDs;

    // Iterate over the submitted form data
    for ($i = 0; $i < count($_POST['projectID']); $i++) {
        // Get the values from the form for each record
        $s1 = $_POST['s1'][$i];
        $s2 = $_POST['s2'][$i];
        $s3 = $_POST['s3'][$i];
        $s4 = $_POST['s4'][$i];
        $s5 = $_POST['s5'][$i];
        $seat_no = $_POST['x'][$i];


     
        $s6=$s1+$s2+$s3+$s4+$s5;

// echo $s5;
//         echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM evaluation_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
// echo $count; 
if($count > 0){
    $query="UPDATE `evaluation_rubric` SET `final_planI`='$s1',`final_planII`='$s2',`final_planIII`='$s3',`final_planIV`='$s4' ,`final_planIV`='$s5',  `final_weight` = '$s6'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
    mysqli_query($conn, $query);
    if ($result == true) {
        echo '<div id="alert" class="alert alert-success">
            <strong>Success!</strong> '. $seat_no. ' 2nd Semester Evaluation has been submitted successfully!
        </div>';
    }
}
else{
    // $query="INSERT INTO `evaluation_rubric`( `proposal_planI`, `proposal_planII`, `proposal_planIII`, `proposal_planIV`, `project_id`, `seat_no`, `proposal_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    // mysqli_query($conn, $query);
    // echo "1st  semester evaluation did not sumbit.";
    if ($result == true) {
        echo '<div id="alert" class="alert alert-danger">
            <strong>Alert!</strong> '. $seat_no. ' Submission failed!  1st Semester Evaluation did not submit.
        </div>';
    }
}


    }
}



///////////////////////// final progress evaluation /////////////////////////////
if (isset($_POST['final_progress_sumbit'])) {
    // Get the project ID from the form
    $projectIDs = $_POST['projectID']; // Store all project IDs in an array

// echo $projectIDs;

    // Iterate over the submitted form data
    for ($i = 0; $i < count($_POST['projectID']); $i++) {
        // Get the values from the form for each record
        $s1 = $_POST['s1'][$i];
        $s2 = $_POST['s2'][$i];
        $s3 = $_POST['s3'][$i];
        $s4 = $_POST['s4'][$i];
        $s5 = $_POST['s5'][$i];
        $seat_no = $_POST['x'][$i];


        $s6=$s1+$s2+$s3+$s4+$s5;

// echo $s5;
//         echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM progress_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
// echo $count; 
if($count > 0){
    $query="UPDATE `progress_rubric` SET `progress_final_planI`='$s1',`progress_final_planII`='$s2',`progress_final_planIII`='$s3',`progress_final_planIV`='$s4',`progress_final_planV`='$s5' , `final_progress_weight` = '$s6'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
    mysqli_query($conn, $query);
    // echo "Record final progress evaluation updated successfully.";
    if ($result == true) {
        echo '<div id="alert" class="alert alert-success">
            <strong>Success!</strong> '. $seat_no. ' 2nd Semester Progress has been submitted successfully!
        </div>';
    }
}
else{
    // $query="INSERT INTO `evaluation_rubric`( `proposal_planI`, `proposal_planII`, `proposal_planIII`, `proposal_planIV`, `project_id`, `seat_no`, `proposal_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    // mysqli_query($conn, $query);
    if ($result == true) {
        echo '<div id="alert" class="alert alert-danger">
            <strong>Alert!</strong> '. $seat_no. ' Submission failed!  1st Progress Evaluation did not submit.
        </div>';
    }
}


    }
}

/////////////////////// REPORT RUBRIC        //////////////

if (isset($_POST['report_rubric_submit'])) {
    // Get the project ID from the form
    $projectIDs = $_POST['projectID']; // Store all project IDs in an array

// echo $projectIDs;

    // Iterate over the submitted form data
    for ($i = 0; $i < count($_POST['projectID']); $i++) {
        // Get the values from the form for each record
        $s1 = $_POST['s1'][$i];
        $s2 = $_POST['s2'][$i];
        $s3 = $_POST['s3'][$i];
        $s4 = $_POST['s4'][$i];
        $s5 = $_POST['s5'][$i];
        $s6 = $_POST['s6'][$i];
        $s7 = $_POST['s7'][$i];
        $s8 = $_POST['s8'][$i];
        $seat_no = $_POST['x'][$i];


        $s9=$s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8;

// echo $s5;
        // echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM proposal_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
// echo $count; 
if($count > 0){
    $query="UPDATE `proposal_rubric` SET `report_planI`='$s1',`report_planII`='$s2',`report_planIII`='$s3',`report_planIV`='$s4' ,`report_planV`='$s5' ,`report_planVI`='$s6' , `report_planVII`='$s7' ,`report_planVIII`='$s8' ,`report_weight` = '$s9'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
    mysqli_query($conn, $query);
    // echo "Record final report  updated successfully.";
    if ($result == true) {
        echo '<div id="alert" class="alert alert-success">
            <strong>Success!</strong> '. $seat_no. ' Report Rubric has been submitted successfully!
        </div>';
    }
}
else{
    // $query="INSERT INTO `evaluation_rubric`( `proposal_planI`, `proposal_planII`, `proposal_planIII`, `proposal_planIV`, `project_id`, `seat_no`, `proposal_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    // mysqli_query($conn, $query);
    // echo "first semester evaluation did not sumbit.";
    if ($result == true) {
        echo '<div id="alert" class="alert alert-danger">
            <strong>Alert!</strong> '. $seat_no. ' Submission failed!  1st Semester Evaluation did not submit.
        </div>';
    }
}


    }
}
?>






</div>
<div> 
    
  
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
    <script> 	




   $(document).ready(function(){
    $('#animated').addClass('animated fadeInDown');
    $( ".alert" ).fadeIn( 300 ).delay( 1500 ).fadeOut( 600 );



});

//proposal evaluation
$(document).ready(function(){
    $('#proposal_evaluation').click(function(e){
        e.preventDefault();
        $.ajax({
            method:"POST",
        url: 'proposal_evaluation/proposal_evaluation.php',
        data:$('#proposal_evaluation').serialize(),
        datatype:'html',
        success: function(response){
            $('#evaluation_form').html(response);
        }
        })
    })
})




//7th semester evaluation

$(document).ready(function(){
    $('#mid_evaluation').click(function(e){
        e.preventDefault();
        $.ajax({
            method:"POST",
        url: 'mid_evaluation/mid_evaluation.php',
        data:$('#mid_evaluation').serialize(),
        datatype:'html',
        success: function(response){
            $('#evaluation_form').html(response);
        }
        })
    })
})


// 8th semester evaluation
$(document).ready(function(){
    $('#final_evaluation').click(function(e){
        e.preventDefault();
        $.ajax({
            method:"POST",
        url: 'final_evaluation/final_evaluation.php',
        data:$('#final_evaluation').serialize(),
        datatype:'html',
        success: function(response){
            $('#evaluation_form').html(response);
        }
        })
    })
})

 </script>
</body>

</html>
<!-- end document-->

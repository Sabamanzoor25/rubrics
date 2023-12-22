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

echo $s5;
        echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM evaluation_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
echo $count; 
if($count > 0){
    $query="UPDATE `evaluation_rubric` SET `planI`='$s1',`planII`='$s2',`planIII`='$s3',`planIV`='$s4' , `1st_weight` = '$s5'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
    mysqli_query($conn, $query);
    echo "Record 1st  semester evaluation updated successfully.";

}
else{
    $query="INSERT INTO `evaluation_rubric`( `planI`, `planII`, `planIII`, `planIV`, `project_id`, `seat_no`, `1st_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    mysqli_query($conn, $query);
    echo "Record  1st  semester evaluation inserted successfully.";
    
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

echo $s5;
        echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM progress_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
echo $count; 
if($count > 0){
    $query="UPDATE `progress_rubric` SET `first_planI`='$s1',`first_planII`='$s2',`first_planIII`='$s3',`first_planIV`='$s4' , `first_weight` = '$s5'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
    mysqli_query($conn, $query);
    echo "Record  1st  semester progress updated successfully.";

}
else{
    $query="INSERT INTO `progress_rubric`( `first_planI`, `first_planII`, `first_planIII`, `first_planIV`, `project_id`, `seat_no`, `first_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    mysqli_query($conn, $query);
    echo "Record  1st  semester progress inserted successfully.";
    
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

echo $s5;
        echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM proposal_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
echo $count; 
if($count > 0){
    $query="UPDATE `proposal_rubric` SET `proposal_planI`='$s1',`proposal_planII`='$s2',`proposal_planIII`='$s3',`proposal_planIV`='$s4' , `proposal_weight` = '$s5'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
    mysqli_query($conn, $query);
    echo "Record proposal updated successfully.";

}
else{
    $query="INSERT INTO `proposal_rubric`( `proposal_planI`, `proposal_planII`, `proposal_planIII`, `proposal_planIV`, `project_id`, `seat_no`, `proposal_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    mysqli_query($conn, $query);
    echo "Record proposal  successfully.";
    
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
        $seat_no = $_POST['x'][$i];


        $s5=$s1+$s2+$s3+$s4;

echo $s5;
        echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM evaluation_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
echo $count; 
if($count > 0){
    $query="UPDATE `evaluation_rubric` SET `final_planI`='$s1',`final_planII`='$s2',`final_planIII`='$s3',`final_planIV`='$s4' , `final_weight` = '$s5'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
    mysqli_query($conn, $query);
    echo "Record final semester evaluation updated successfully.";

}
else{
    // $query="INSERT INTO `evaluation_rubric`( `proposal_planI`, `proposal_planII`, `proposal_planIII`, `proposal_planIV`, `project_id`, `seat_no`, `proposal_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    // mysqli_query($conn, $query);
    echo "first semester evaluation did not sumbit.";
    
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
        $seat_no = $_POST['x'][$i];


        $s5=$s1+$s2+$s3+$s4;

echo $s5;
        echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM progress_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
echo $count; 
if($count > 0){
    $query="UPDATE `progress_rubric` SET `final_planI`='$s1',`final_planII`='$s2',`final_planIII`='$s3',`final_planIV`='$s4' , `final_weight` = '$s5'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
    mysqli_query($conn, $query);
    echo "Record final progress evaluation updated successfully.";

}
else{
    // $query="INSERT INTO `evaluation_rubric`( `proposal_planI`, `proposal_planII`, `proposal_planIII`, `proposal_planIV`, `project_id`, `seat_no`, `proposal_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    // mysqli_query($conn, $query);
    echo "first progress evaluation did not sumbit.";
    
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
        $seat_no = $_POST['x'][$i];


        $s5=$s1+$s2+$s3+$s4;

echo $s5;
        echo nl2br($seat_no.'   s1   \n   '.$s1 .'         s2       \n '. $s2.' s3   \n '. $s3.'   s4  \n  '    . $s4);

        // Get the project ID for the current iteration
        $projectID = $projectIDs[$i];


        $query = "SELECT COUNT(*) as seat_no FROM proposal_rubric WHERE project_id ='$projectID'  and  seat_no='$seat_no'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);



$count = $row['seat_no'];
echo $count; 
if($count > 0){
    $query="UPDATE `proposal_rubric` SET `report_planI`='$s1',`report_planII`='$s2',`report_planIII`='$s3',`report_planIV`='$s4' , `report_weight` = '$s5'  WHERE project_id ='$projectID' and seat_no = '$seat_no'";
    // Execute the query
    mysqli_query($conn, $query);
    echo "Record final report  updated successfully.";

}
else{
    // $query="INSERT INTO `evaluation_rubric`( `proposal_planI`, `proposal_planII`, `proposal_planIII`, `proposal_planIV`, `project_id`, `seat_no`, `proposal_weight`) VALUES ('$s1', '$s2', '$s3', '$s4', '$projectID', '$seat_no', '$s5' )";
    // mysqli_query($conn, $query);
    echo "first semester evaluation did not sumbit.";
    
}


    }
}
?>






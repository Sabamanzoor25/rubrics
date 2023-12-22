<?php  
// session_start();
$connect=mysqli_connect('localhost','root','','rubric');
// extracting POST Variables
$batch=$_POST['batch'];
$dept=$_POST['dept'];
extract($_POST);
    $error = [];
    $check = $connect->query("SELECT * FROM `rubric` where project_id = '{$code}' and batch='{$batch}' and department='{$dept}' ");
    if($check->num_rows > 0){
        $error['field_name'] = 'code';
        $error['msg']=" Project ID already exists on the product list";
        // $_SESSION['flashdata']['msg'] = 'data did not enter';
    }

    // else{
    //     $error['msg']=" data did not enter";  
    // }
    echo json_encode($error);
?>
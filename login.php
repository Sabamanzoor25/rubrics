<?php
$conn=mysqli_connect('localhost','root','','rubric');
session_start();
if(isset($_POST['logout'])) {
    session_destroy();
    header('location: index.php');
}
//Admin LOGIN BUTTON
if(isset($_POST['admin_login']))
{
    //  $_SESSION["PatientLogin"] = "yellow";
    $username = $_POST['username'];
    $PASSWORD = $_POST['password'];
    //INSERT INTO `patient`(LNAME,FNAME,DOB,CNIC, EMAIL,CELL,NATIONALITY,CITY,ADDRESS,SEX,SPECIALIZATION, QUALIFICATION)

    $sql = "SELECT * FROM admin WHERE admin_email='$username' AND password='$PASSWORD'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $_SESSION['Login'] = $row['admin_email'];
        }
        echo "<script>window.location.href='dashboard/admin_dashboard/index.php'; </script>";
    }
    else
    {
        $_SESSION['adminLogin']='AUTHENTICATION FAILED TRY AGAIN';
        // $m = 'AUTHENTICATION FAILED TRY AGAIN';
        // echo "<script> alert('$m');window.location.href='index.html'; </script>";
        header("location: index.php");
        //  echo "<script>  <div class='failed alert alert-success'> AUTHENTICATION FAILED TRY AGAIN</div></script>";
    }
}




// Register User
if (isset($_POST['user_login'])) {

    $userid = $_POST['userid'];
    $password=$_POST['password'];

    $sql2 = "SELECT * FROM user WHERE user_email='$userid' AND password='$password'";
    $result = mysqli_query($conn,$sql2) or die(mysqli_error());
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result))
        {
            
			
            
            $_SESSION['user_Login'] = $row['user_name'];
            echo "<script>alert('Login Successfully!')</script>";

        }
        // echo "<script>window.location.href='../dashboard/user_dashboard/user_dashboard.php'; </script>";
        echo  "<script>window.location.href='dashboard/user_dashboard/user.php'; </script>";
    }

    else{
        echo "<script>alert('Invalid username or password')</script>";
        echo "<script>window.location='index.php'</script>";
    }
}
?>
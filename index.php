<?
session_start();

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
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link href="assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/theme.css" rel="stylesheet" media="all">
    <link href="assets/css/login.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">

                    <div class="login-content">
                    <div>

                    </div>
                        <div class="login-logo">
                            <a href="#">
                                <img src="assets/image/img1.png" alt="FYP RUBRIC">
                            </a>
                        </div>
                        <div class="login-form">

                            <ul class="tab-group">
                                <li class="tab active"><a href="#signup">Admin</a></li>
                                <li class="tab"><a href="#login">User</a></li>
                              </ul>

<?php

if(isset($_SESSION['adminLogin']))
{
   echo '<script> alert('.$_SESSION['adminLogin'].'); </script>';
    echo "<h4 class='alert alert-danger alert-dismissible fade show' id='alert' role='alert'>".$_SESSION['adminLogin']."</h4>";
  
  
}
?>
                              <div class="tab-content">
                              <span class="error1"></span>
                                <div id="signup">  

                            <form action="login.php" method="post">
                                <div class="field-wrap">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full"  name="username" required autocomplete="off"  name="email" placeholder="Email">
                                </div>
                                <div class="field-wrap">
                                    <label>Password</label>
                                    <input class="au-input au-input--full"  name="password" type="password"required autocomplete="off" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        
                                        <a href="forgetpassword/forgot_password.php">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit" name="admin_login">sign in</button>
                                <!-- <div class="social-login-content">
                                   <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div> -->
                            </form>
                          



                            <!-- <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div> -->
                        </div>



                            <div id="login">  

                                <form action="login.php" method="post">
                                    <div class="field-wrap">
                                        <label>Email Address</label>
                                        <input class="au-input au-input--full"  name="userid" required autocomplete="off"   placeholder="Email">

                                       <!-- <label>Email Address</label>
                                        <input class="au-input auuser1-input--full" name='userid' required autocomplete="off"  placeholder="Email"> -->
                                    </div>
                                    <div class="field-wrap">
                                        <label>Password</label>
                                        <input  class="au-input au-input--full"  name='password' required autocomplete="off" type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">Remember Me
                                        </label>
                                        <label>
                                            <a href="#">Forgotten Password?</a>
                                        </label>
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit"  name='user_login'>sign in</button>
                                    <!-- <div class="social-login-content"> -->
                                        <!-- <div class="social-button">
                                            <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                            <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                        </div> -->
                                    <!-- </div> -->
                                </form>

                            </div>
    









                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/animsition/animsition.min.js"></script>
    <script src=assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>

</body>

</html>

<script>
    $(".form")
  .find("input, textarea")
  .on("keyup blur focus", function (e) {
    var $this = $(this),
      label = $this.prev("label");

    if (e.type === "keyup") {
      if ($this.val() === "") {
        label.removeClass("active highlight");
      } else {
        label.addClass("active highlight");
      }
    } else if (e.type === "blur") {
      if ($this.val() === "") {
        label.removeClass("active highlight");
      } else {
        label.removeClass("highlight");
      }
    } else if (e.type === "focus") {
      if ($this.val() === "") {
        label.removeClass("highlight");
      } else if ($this.val() !== "") {
        label.addClass("highlight");
      }
    }
  });

$(".tab a").on("click", function (e) {
  e.preventDefault();

  $(this).parent().addClass("active");
  $(this).parent().siblings().removeClass("active");

  target = $(this).attr("href");

  $(".tab-content > div").not(target).hide();

  $(target).fadeIn(600);
});



// $("#error1").load("login.php", a);




</script>


<!-- end document-->
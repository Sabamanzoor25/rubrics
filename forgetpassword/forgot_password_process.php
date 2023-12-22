<?php
    if(isset($_POST['reset'])) {
        $email = $_POST['email'];
    
    }
    else {
        
        exit();
    }
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require 'mail/Exception.php';
    require 'mail/PHPMailer.php';
    require 'mail/SMTP.php';
    
    // Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true); 
    
    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'sabamanzoor321@gmail.com';                     // SMTP username
        $mail->Password   = 'secret';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('sabamanzoor321@gmail.com', 'Admin');
        $mail->addAddress($email);     // Add a recipient
        $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Password Reset';
        $mail->Body    = 'To reset your password click  </br>Reset your password in a day.';
        $conn=mysqli_connect('localhost','root','','rubric');
      
        if($conn->connect_error) {
            die('Could not connect to the database.');
        }
       $query1="SELECT * FROM user WHERE user_email = '$email'";

        $verifyQuery =mysqli_query($conn,$query1) ;
       

        if($verifyQuery->num_rows) {
            $query2="UPDATE user SET code = '$code' WHERE user_email = '$email'";
            $codeQuery =mysqli_query($conn,$query2);
                
            $mail->send();
            echo 'Message has been sent, check your email';
        }
        $conn->close();
    
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }    
    
?>
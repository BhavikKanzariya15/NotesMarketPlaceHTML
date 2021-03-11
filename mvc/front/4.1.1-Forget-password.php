<?php 

session_start();


    
if(isset($_POST['submit'])) {
    
    include 'dbconnect.php';
include 'send_mail.php';
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    
    $token = bin2hex(random_bytes(4));
    $password_encrypt = password_hash($token, PASSWORD_DEFAULT);
    
    $emailquery = "SELECT * FROM users WHERE EmailID='$email'";
    $query = mysqli_query($conn,$emailquery);
    
    $emailcount = mysqli_num_rows($query);
    
    if($emailcount>0) {
 
                $mail->addAddress($email);  // This email is where you want to send the email
                $mail->addReplyTo($config_email);   // If receiver replies to the email, it will be sent to this email address
 
                // Setting the email content
                $mail->IsHTML(true);  
                $mail->Subject = "New Temporary Password has been created for you"; 
                
                $mail->Body = " Hello,<br><br>We have generated a new password for you <br>password: $token <br><br> Regards,<br>Notes Marketplace ";

                $mail->send();
                
                $updatequery = "UPDATE users SET Password = '$password_encrypt' WHERE EmailID = '$email'";
                $update_pass_query = mysqli_query($conn, $updatequery);
        
                if($update_pass_query) {
                    $_SESSION['update_pass_msg'] = "check your mail to see your updated password";
                    echo $_SESSION['update_pass_msg'];
                }else {
                    echo "somthing went wrong";
                }
        
    
}else {
        echo "no user exist";
    }
    
}
//mysqli_close($conn);

?>




<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>4.1.1-Forget-password</title>
<!-- Favicon -->
    <link rel="shortcut icon" href="images/Homepage/favicon.ico">


        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap"
            rel="stylesheet">

        <!-- Bootstrap Css    -->
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">

    </head>

    <body>
        <div class="main-page">
            <div class="main-page-container">
                <div class="form-wrap">
                    <div id="site-logo" class="text-center">
                        <img src="images/Login/top-logo.png"
                            class="img-responsive" alt="top-logo">
                    </div>
                    <div id="form-size" class="main-general-form">
                        <form action="" method="post">
                            <h3 class="text-center">Forgot Password?</h3>
                            <p class="text-center">Enter your email to reset
                                your password</p>
                            <div class="form-group">
                                <label for="exampleInputEmail1"
                                    class="form-label">Email
                                </label>
                                <input type="email" name="email" class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                    placeholder="Enter Your Email">

                            </div>

                            <button type="submit" name="submit" class="btn-general">SUBMIT</button>
                        </form>


                    </div>
                </div>

            </div>
        </div>



        <!-- Jquery   -->
        <script src="js/jquery/jquery-3.5.1.min.js"></script>

        <!-- Bootstrap Js -->
        <script src="js/bootstrap/bootstrap.min.js"></script>

        <!-- Custom Js -->
        <script src="js/script.js"></script>

    </body>

</html>
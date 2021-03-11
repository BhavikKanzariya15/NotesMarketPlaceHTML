<?php
session_start();
include 'send_mail.php';
    
if(isset($_POST['submit'])) {
    
    include 'dbconnect.php';
    
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    
    
    $emailquery = "SELECT * FROM users WHERE EmailID='$email'";
    $query = mysqli_query($conn,$emailquery);
    
    $emailcount = mysqli_num_rows($query);
    
    echo $emailcount;  
    
    if($emailcount>0) {
        echo "email already exists";
    } else {
        if($password === $cpassword){
            
            $insertquery = "INSERT INTO users(RoleID,FirstName,LastName,EmailID,Password) VALUES(2,'$firstname','$lastname','$email','$password')";
        
                
            $iquery = mysqli_query($conn, $insertquery);
               $id = mysqli_insert_id($conn);
            
            if($iquery) {
                
                // This email address and name will be visible as sender of email
 
                $mail->addAddress($email);  // This email is where you want to send the email
                $mail->addReplyTo($config_email);   // If receiver replies to the email, it will be sent to this email address
 
                // Setting the email content
                $mail->IsHTML(true);  
                $mail->Subject = "Notes Marketplace - Email Verification"; 
                
                $mail->Body = "
                <table style='height:60%;width: 60%; position: absolute;margin-left:10%;font-family:Open Sans !important;background: white;border-radius: 3px;padding-left: 2%;padding-right: 2%;'>
                <thead>
                    <th>
                        <img src='https://i.ibb.co/HVyPwqM/top-logo1.png' alt='logo' style='margin-top: 5%; margin-left: 0px;'>
                    </th>
                </thead>
                <tbody>
                    <tr style='height: 60px;font-family: Open Sans;font-size: 26px;font-weight: 600;line-height: 30px;color: #6255a5;'>
                        <td class='text-1'>Email Verification</td>
                    </tr>
                    <tr style='height: 40px;font-family: Open Sans;font-size: 18px;font-weight: 600;line-height: 22px;color: #333333;margin-bottom: 20px;'>
                        <td class='text-2'>Dear $firstname,</td>
                    </tr>
                    <tr style='height: 60px;'>
                        <td class='text-3'>
                            Thanks for Signing up! <br>
                            Simply click below for email verification.
                        </td>
                    </tr>
                    <tr style='height: 120px;font-size: 16px;font-weight: 400;line-height: 22px;color: #333333;margin-bottom: 50px;'>
                        <td style='text-align: center;'>
                            <button class='btn btn-verify' style='width: 100% !important;height:50px;font-family: Open Sans; font-size: 18px;font-weight: 600;line-height: 22px;color: #fff;background-color: #6255a5;border-radius: 3px;'><a class='btn' href='http://localhost/php/front/verification.php?id=$id' role='button' style='color: #fff; text-decoration: none; text-transform: uppercase;'>Verify email address</a>
                            </button>
                        </td>
                    </tr>
                </tbody>
                </table>";

                $mail->send();
                $_SESSION['msg'] = "check your mail to activate your account $email";
                echo "email sent";
                
            } else {
                ?>
                <script>
                    alert("NO Inserted")
                </script>
                <?php
                
            } 
        } else {
            echo "password and confirm password should match";
        }
    }
}

?> 



<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- important meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>3.1.2-Sign-Up</title>
<!-- Favicon -->
    <link rel="shortcut icon" href="images/Homepage/favicon.ico">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap"
            rel="stylesheet">

        <!-- Font awesome -->
        <link rel="stylesheet" href="css/font-awesome/font-awesome.min.css">
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
                <div class="form-warp">
                    <div id="site-logo" class="text-center">
                        <img src="images/login/top-logo.png"
                            class="img-responsive" alt="top-logo">
                    </div>
                    <div id="form-size" class="main-general-form">
                        <form action="3.1.2-Sign-Up.php" method="post">
                            <h3 class="text-center">Create an Account</h3>
                            <p class="text-center">Enter your details to signup</p>
                           <!-- <p id="user-message" class="text-center"
                                style="color:green">
                                <i class="fa fa-check-circle mr-2"></i>Your
                                account
                                has been successfully created. </p>-->
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name</label>
                                <input type="text" name="firstname" class="form-control"
                                    id="exampleInputFirstName"
                                    aria-describedby="emailHelp"
                                    placeholder="Enter Your First Name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input type="text" name="lastname" class="form-control"
                                    id="exampleInputLastName"
                                    aria-describedby="emailHelp"
                                    placeholder="Enter Your Last Name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                    placeholder="Enter Your Email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,24}$" class="form-control"
                                    id="exampleInputPassword1"
                                    placeholder="Enter Your Password" required>
                                <span toggle="#password-field"
                                    id="toggle-password"
                                    class="toggle-password"><img
                                        src="images/login/eye.png"
                                        alt="toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm
                                    Password</label>
                                <input type="password" name="cpassword" class="form-control"
                                    id="exampleInputPassword2"
                                    placeholder="Enter Your Confirmed Password" required>
                                <span toggle="#password-field"
                                    id="toggle-password2"
                                    class="toggle-password"><img
                                        src="images/login/eye.png"
                                        alt="toggle-password"></span>
                            </div>
                            <button type="submit" name="submit" class="btn-general">sign
                                up</button>
                           
                        </form>
                        <p class="text-center">Already have an account? <a
                                href="3.1.1-Login.php">Login</a></p>
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
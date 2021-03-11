<?php 

session_start();

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
}else {
    echo $_SESSION['msg'] = "your are logged out";
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>3.1.1-Login</title>
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
     
     
     <?php 
    include 'dbconnect.php';
    
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $loginpassword = $_POST['password'];
        
        $email_search = "SELECT * FROM users WHERE EmailID='$email' and IsEmailVerified = '01'";
        $query = mysqli_query($conn, $email_search);
        
        $email_count = mysqli_num_rows($query);
        
        if($email_count) {
            $email_pass = mysqli_fetch_assoc($query);
            
            $db_pass = $email_pass['Password'];
            
            $_SESSION['username'] = $email_pass['FirstName'];
            $_SESSION['user_id'] = $email_pass['ID'];
            $_SESSION['is_loggedin'] = "yes";
            $_SESSION['email'] = $email_pass['EmailID'];
            
            
           // $check_pass = password_verify($loginpassword, $db_pass);
            
            if($loginpassword == $db_pass) {            
                if(isset($_POST['rememberme'])) {
                    setcookie('emailcookie', $email, time()+86400);
                    setcookie('passwordcookie', $loginpassword, time()+86400);
                ?>
                   <script>location.replace("3.7.1-User-Profile.php");</script>
                <?php
                    
                }else {
                    ?>
                   <script>location.replace("3.7.1-User-Profile.php");</script>
                <?php
                }
                
                
    
            }else {
                echo "password incorrect";
            }
        }else {
            echo "Invalid Email";
        }
    }
    
?>   
     
       
            <div class="main-page">
            <div class="main-page-container">
                <div class="form-wrap">
                    <div id="site-logo" class="text-center">
                        <img src="images/Login/top-logo.png"
                            class="img-responsive" alt="top-logo">
                    </div>
                    <div id="form-size" class="main-general-form">
                        <form action="3.1.1-Login.php" method="post">
                            <h3 class="text-center">Login</h3>
                            <p class="text-center">Enter your email address and
                                password to login</p>
                            <div class="form-group">
                                <label for="exampleInputEmail1"
                                    class="form-label">Email
                                </label>
                                <input type="email" name="email" class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"
                                    placeholder="Enter Your Email">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"
                                    class="form-label">Password</label>
                                    <a href="4.1.1-Forget-password.php">Forgot Password?</a>
                                <input type="password" name="password" class="form-control"
                                    id="exampleInputPassword1"
                                    placeholder="Enter Your Password">
                                <span toggle="#password-field"
                                    id="toggle-password"
                                    class="toggle-password">
                                    <img
                                        src="images/Login/eye.png"
                                        alt="toggle-password"></span>
                               <!-- <small id="emailHelp">The password that you have
                                    entered is incorrect</small>-->

                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="rememberme"
                                            aria-label="Checkbox
                                            for following text input">
                                        <label for="gridCheck">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn-general">LOGIN</button>
                        </form>

                        <p class="text-center">Don't have an account? <a
                                href="3.1.2-Sign-Up.php">Sign Up</a></p>
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
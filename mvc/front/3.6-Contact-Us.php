<?php 
    session_start();

    include 'send_mail.php';
    
    if(isset($_POST['submit'])) {
        
        include 'dbconnect.php';
        
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $comment = mysqli_real_escape_string($conn, $_POST['comments']);  
        
        
 
        

        $mail->setFrom($email, $fullname);
        // This email address and name will be visible as sender of email

        $mail->addAddress($config_email, 'Notes-Marketplace');  // This email is where you want to send the email
        $mail->addReplyTo($config_email, $fullname);   // If receiver replies to the email, it will be sent to this email address

         //Setting the email content
        $mail->IsHTML(true);  
        $mail->Subject = "$fullname - $subject"; 

        $mail->Body = "Hello, <br><br> $comment <br><br> Regards, <br> $fullname";
        
        $mail->send();
      /*  if($mail->send()) {
            ?>
            <script> alert("mail sent to admin.")</script>
            <?php    
        }else {
            ?>
            <script> alert("somthing went wrong. please try again,")</script>
            <?php
        }*/
        
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
        <title>3.6-Contact-Us</title>
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

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img
                        src="images/Login/top-logo_2.png" alt=""></a>
                <button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="sr-only">(current)</span>Search
                                Notes </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sell Your Notes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">

                        <div class="login-note-btn">
                            <a href=""><button>Login</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid p-0">
            <div class="Search-img-text">
                <h3 class="text-center">Contact Us</h3>
            </div>
        </div>
        <div class="contactus">
            <div class="container">


                <div id="address-details">

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 getintouch">
                            <h3>
                                Get In Touch
                                <p>Let us know how to get back to you</p>
                            </h3>
                        </div>
                    </div>
                    
                    <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="full-name">Full Name *</label>
                                <input type="text" id="full-name" name="fullname" class="form-control" placeholder="Enter your full name">
                            </div>
                            <div class="form-group">
                                <label for="email-address">Email Address *</label>
                                <input type="email" id="email-address" name="email" class="form-control" placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject *</label>
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter your subject">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="comment-area">
                                <div class="form-group">
                                    <label for="comments">Comments/Questions *</label>
                                    <textarea class="form-control" name="comments" id="comments" placeholder="Comments..."></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="btn-submit">
                          <button type="submit" name="submit" class="btn btn-submit btn-general">Submit</button>
                        <!--<a class="btn btn-submit" href="configure-contect-us.php" title="Submit" role="button">Submit</a>-->
                    </div>
                </form>

                </div>
            </div>
        </div>





        <!-- footer section -->
        <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div id="text-area" class="col-md-6">
                        <p>Copyright <i class="fa fa-copyright"></i>
                            TatvaSoft
                            All rights reserved.</p>
                    </div>
                    <div id="icon-area" class="col-md-6">
                        <ul class="social-list">
                            <li><a href="#"><i class="fa
                                        fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa
                                        fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa
                                        fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer section End -->





        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>



        <!-- Jquery   -->
        <script src="js/jquery/jquery-3.5.1.min.js"></script>

        <!-- Bootstrap Js -->
        <script src="js/bootstrap/bootstrap.min.js"></script>

        <!-- Custom Js -->
        <script src="js/script.js"></script>
    </body>

</html>
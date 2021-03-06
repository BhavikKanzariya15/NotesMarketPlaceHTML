<?php 
session_start();

?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- important meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>3.7.5-Buyer-Request</title>
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
    
    <?php 
    include 'dbconnect.php';
    $userID = $_SESSION['user_id'];  
    $email = $_SESSION['email'];


?>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#"><img
                            src="images/Homepage/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Search
                                    Notes </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sell Your Notes</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#">Buyer Requests</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                            
                               <li class="nav-item">
                               <div class="dropdown-profile">
                                <a class="dropbtn-profile nav-link" href="#"><img src="images/Notes-Details/client-1.jpg" alt="customer-image"></a>
                                <div class="dropdown-content-profile">
                                    <a href="#">My Profile</a>
                                    <a href="#">My Download</a>
                                    <a href="#">My Sold Notes</a>
                                    <a href="#">My Rejected Notes</a>
                                    <a href="#">Change Password</a>
                                    <a href="#">logout</a>
                                </div>
                            </div>
                            </li>

                        </ul>
                        <form class="form-inline my-2 my-lg-0">

                            <div class="login-note-btn">
                                <a href=""><button>Logout</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>



        <div id="My-Sold-notes" class="container">
            <div class="progress-3">

                <div class="progress-notes">
                    <div class="row progress-dashboard ">

                        <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                            <h3>Buyer Requests</h3>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <div class="progress-note-btn">
                                <input type="text" id="search-enter-progress"
                                    placeholder="Search" title="Type
                                    in a name">
                                <a href=""><button>Search</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="progress-table ">
                   <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">sr no.</th>
                                    <th scope="col">note TITLE</th>
                                    <th scope="col">CATEGORY</th>
                                    <th scope="col">buyer</th>
                                    <th scope="col">sell type</th>
                                    <th scope="col">price</th>
                                    <th scope="col">downloaded date/time</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="title-col">Data Science</td>
                                    <td>Science</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$250</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td>
                                        <a href="#"><img src="images/Dashboard/eye.png" class="edit-action" alt="edit-icon" /></a>
                                        <div class="dropdown my-sold-notes">
                                            <a class="dropbtn"><img src="images/Dashboard/three-dot.png" alt="delete-icon" /></a>
                                            <div class="dropdown-content">
                                                <a href="#">Allow Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="title-col">Account</td>
                                    <td>Commerce</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td>
                                        <a href="#"><img src="images/Dashboard/eye.png" class="edit-action" alt="edit-icon" /></a>
                                        <div class="dropdown my-sold-notes">
                                            <a class="dropbtn"><img src="images/Dashboard/three-dot.png" alt="delete-icon" /></a>
                                            <div class="dropdown-content">
                                                <a href="#">Allow Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="title-col">Social Studies</td>
                                    <td>Science</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td>
                                        <a href="#"><img src="images/Dashboard/eye.png" class="edit-action" alt="edit-icon" /></a>
                                        <div class="dropdown my-sold-notes">
                                            <a class="dropbtn"><img src="images/Dashboard/three-dot.png" alt="delete-icon" /></a>
                                            <div class="dropdown-content">
                                                <a href="#">Allow Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="title-col">AI</td>
                                    <td>TI</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$158</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td>
                                        <a href="#"><img src="images/Dashboard/eye.png" class="edit-action" alt="edit-icon" /></a>
                                        <div class="dropdown my-sold-notes">
                                            <a class="dropbtn"><img src="images/Dashboard/three-dot.png" alt="delete-icon" /></a>
                                            <div class="dropdown-content">
                                                <a href="#">Allow Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="title-col">Lorem ipsum</td>
                                    <td>Lorem</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td>
                                        <a href="#"><img src="images/Dashboard/eye.png" class="edit-action" alt="edit-icon" /></a>
                                        <div class="dropdown my-sold-notes">
                                            <a class="dropbtn"><img src="images/Dashboard/three-dot.png" alt="delete-icon" /></a>
                                            <div class="dropdown-content">
                                                <a href="#">Allow Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="title-col">Data Science</td>
                                    <td>Science</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$250</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td>
                                        <a href="#"><img src="images/Dashboard/eye.png" class="edit-action" alt="edit-icon" /></a>
                                        <div class="dropdown my-sold-notes">
                                            <a class="dropbtn"><img src="images/Dashboard/three-dot.png" alt="delete-icon" /></a>
                                            <div class="dropdown-content">
                                                <a href="#">Allow Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="title-col">Account</td>
                                    <td>Commerce</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td>
                                        <a href="#"><img src="images/Dashboard/eye.png" class="edit-action" alt="edit-icon" /></a>
                                        <div class="dropdown my-sold-notes">
                                            <a class="dropbtn"><img src="images/Dashboard/three-dot.png" alt="delete-icon" /></a>
                                            <div class="dropdown-content">
                                                <a href="#">Allow Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="title-col">Social Studies</td>
                                    <td>Science</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td>
                                        <a href="#"><img src="images/Dashboard/eye.png" class="edit-action" alt="edit-icon" /></a>
                                        <div class="dropdown my-sold-notes">
                                            <a class="dropbtn"><img src="images/Dashboard/three-dot.png" alt="delete-icon" /></a>
                                            <div class="dropdown-content">
                                                <a href="#">Allow Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="title-col">AI</td>
                                    <td>TI</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Paid</td>
                                    <td>$158</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td>
                                        <a href="#"><img src="images/Dashboard/eye.png" class="edit-action" alt="edit-icon" /></a>
                                        <div class="dropdown my-sold-notes">
                                            <a class="dropbtn"><img src="images/Dashboard/three-dot.png" alt="delete-icon" /></a>
                                            <div class="dropdown-content">
                                                <a href="#">Allow Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="title-col">Lorem ipsum</td>
                                    <td>Lorem</td>
                                    <td>testing123@gmail.com</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td>27 Nov 2020, 11:24:34</td>
                                    <td>
                                        <a href="#"><img src="images/Dashboard/eye.png" class="edit-action" alt="edit-icon" /></a>
                                        <div class="dropdown my-sold-notes">
                                            <a class="dropbtn"><img src="images/Dashboard/three-dot.png" alt="delete-icon" /></a>
                                            <div class="dropdown-content">
                                                <a href="#">Allow Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>

                <div class="pagination-section">
                    <div class="pagination-notes">
                        <div class="pagination-number">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
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
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer section End -->


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Jquery   -->
        <script src="js/jquery/jquery-3.5.1.min.js"></script>
        
        <!-- Popper Js -->
        <script src="js/popper/popper.min.js"></script>


        <!-- Bootstrap Js -->
        <script src="js/bootstrap/bootstrap.min.js"></script>

        <!-- Custom Js -->
        <script src="js/script.js"></script>

    </body>

</html>
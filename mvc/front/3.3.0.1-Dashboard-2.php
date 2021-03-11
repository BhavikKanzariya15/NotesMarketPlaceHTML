<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- important meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>3.3.0.1-Dashboard-2</title>
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
                            <a class="nav-link" href="#"><span
                                    class="sr-only">(current)</span>Search
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
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img
                                    class="img-responsive" id="nav-img"
                                    src="images/Login/navbar.jpg"
                                    alt="customer-image"></a>
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

        <div class="container">
            <div class="User-Dashboard">
                <div class="row dashboard-1">

                    <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                        <h3>Dashboard</h3>
                    </div>
                    <!-- <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                        <div class="add-note-btn">
                            <a href=""><button>add note</button></a>
                        </div>
                    </div> -->
                </div>
                <div class="dashboard-detail-2">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="flex-container-2">
                            <div style="flex-grow: 5" id="dash-4">
                                <div class="dash-user-1">
                                    <!-- <h6>My Earning</h6> -->
                                    <img src="images/Dashboard/dashboard.png"
                                        id="img-4" alt=""><br>
                                    <span id="earning">My Earning</span></div>
                            </div>
                            <div style="flex-grow: 6" id="box-2">
                                <div class="dash-user-1">
                                    <h6>100</h6><span>Number
                                        of Notes Sold</span>
                                </div>
                            </div>
                            <div style="flex-grow: 6" id="box-3">
                                <div class="dash-user-1">
                                    <h6>$10,00,000</h6><span>Money
                                        Earned</span>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="progress-3">

                    <div class="progress-notes-2">
                        <div class="row progress-dashboard">

                            <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                                <h3>In Progress Notes</h3>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <div class="progress-note-btn">
                                    <input type="text"
                                        id="search-enter-progress"
                                        placeholder="Search" title="Type
                                        in a name"> <a href=""><button>Search</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="progress-table" style="overflow-x:auto;">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th scope="col">ADD DATE</th>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">CATEGORY</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>09-10-2020</td>
                                    <td>Data Science</td>
                                    <td>Science</td>
                                    <td>Draft</td>
                                    <td><img src="images/Dashboard/edit.png"
                                            class="action-1" alt=""><img
                                            src="images/Dashboard/delete-2.png"
                                            alt=""></td>
                                </tr>
                                <tr>

                                    <td>10-10-2020</td>
                                    <td>Account</td>
                                    <td>Commerce</td>
                                    <td>In Review</td>
                                    <td><img src="images/Dashboard/eye.png"
                                            alt=""></td>
                                </tr>
                                <tr>

                                    <td>11-10-2020</td>
                                    <td>Social Studies</td>
                                    <td>Social</td>
                                    <td>Submitted</td>
                                    <td><img src="images/Dashboard/eye.png"
                                            alt=""></td>
                                </tr>
                                <tr>

                                    <td>12-10-2020</td>
                                    <td>AI</td>
                                    <td>IT</td>
                                    <td>Submitted</td>
                                    <td><img src="images/Dashboard/eye.png"
                                            alt=""></td>
                                </tr>
                                <tr>

                                    <td>13-10-2020</td>
                                    <td>Python</td>
                                    <td>IT</td>
                                    <td>Draft</td>
                                    <td><img src="images/Dashboard/edit.png"
                                            class="action-1" alt=""><img
                                            src="images/Dashboard/delete-2.png"
                                            alt=""></td>
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
                <div class="progress-3">

                    <div class="progress-notes-2">
                        <div class="row progress-dashboard general-top-bar">

                            <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                                <h3>Published Notes</h3>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <div class="progress-note-btn">
                                    <input type="text"
                                        id="search-enter-progress"
                                        placeholder="Search" title="Type
                                        in a name">
                                    <a href=""><button>Search</button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="progress-table general-big-table">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th scope="col">ADD DATE</th>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">CATEGORY</th>
                                    <th scope="col">SELL TYPE</th>
                                    <th scope="col">PRICE</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>09-10-2020</td>
                                    <td>Data Science</td>
                                    <td>Science</td>
                                    <td>Paid</td>
                                    <td>$575</td>
                                    <td><img src="images/Dashboard/eye.png"
                                            class="action-1" alt=""></td>
                                </tr>
                                <tr>

                                    <td>10-10-2020</td>
                                    <td>Account</td>
                                    <td>Commerce</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td><img src="images/Dashboard/eye.png"
                                            alt=""></td>
                                </tr>
                                <tr>

                                    <td>11-10-2020</td>
                                    <td>Social Studies</td>
                                    <td>Social</td>
                                    <td>Free</td>
                                    <td>$0</td>
                                    <td><img src="images/Dashboard/eye.png"
                                            alt=""></td>
                                </tr>
                                <tr>

                                    <td>12-10-2020</td>
                                    <td>AI</td>
                                    <td>IT</td>
                                    <td>Paid</td>
                                    <td>$3542</td>

                                    <td><img src="images/Dashboard/eye.png"
                                            alt=""></td>
                                </tr>
                                <tr>

                                    <td>13-10-2020</td>
                                    <td>Python</td>
                                    <td>IT</td>
                                    <td>Free</td>
                                    <td>$0</td>

                                    <td><img src="images/Dashboard/eye.png"
                                            class="action-1" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

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
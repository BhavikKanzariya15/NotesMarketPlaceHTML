 <!DOCTYPE html>
<html lang="en">

    <head>

        <!-- important meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,
            initial-scale=1">
        <!-- title -->
        <title>4.2.0-Dashboard</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/Homepage/favicon.ico">
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap"
            rel="stylesheet">

        <!-- Font awesome -->
        <link rel="stylesheet"
            href="css/font-awesome/font-awesome.min.css">
        <!-- Bootstrap Css    -->
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <!-- Custom CSS -->
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style-admin.css">
        <!-- Responsive CSS -->
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive-admin.css">

    </head>

    <body>

        <div id="page-container">
            <div id="content-wrap">

                <nav class="navbar navbar-expand-lg navbar-light
                    bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="#"><img
                                src="images/Homepage/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle
                            navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                          <div class="dropdown-navbar">
                                        <a class="dropbtn-navbar
                                            nav-link" href="#">Notes <span><i class="fa fa-angle-down"></i></span></a>
                                        <div
                                            class="dropdown-content-navbar">
                                            <a href="#">Notes Under
                                                Review</a>
                                            <a href="#">Published Notes</a>
                                            <a href="#">Downloaded Notes</a>
                                            <a href="#">Rejected Notes</a>
                                        </div>
                                    </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Members</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown-navbar">
                                            <a class="dropbtn-navbar
                                                nav-link"
                                                href="#">Reports  <span><i class="fa fa-angle-down"></i></span></a>
                                            <div
                                                class="dropdown-content-navbar">
                                                <a href="#">Spam Reports</a>
                                            </div>
                                        </div>
                                        <li class="nav-item">
                                            <div class="dropdown-navbar">
                                        <a class="dropbtn-navbar
                                            nav-link" href="#">Settings  <span><i class="fa fa-angle-down"></i></span></a>
                                        <div
                                            class="dropdown-content-navbar">
                                            <a href="#">Manage System Configuration</a>
                                            <a href="#">Manage Administrator</a>
                                            <a href="#">Manage Category</a>
                                            <a href="#">Manage Type</a>
                                            <a href="#">Manage Countries</a>
                                        </div>
                                    </div>
                                        </li>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown-profile">
                                            <a class="dropbtn-profile
                                                nav-link"
                                                href="#"><img
                                                    src="images/Notes-Details/client-1.jpg"
                                                    alt="customer-image"><span><i class="fa fa-angle-down"></i></span></a>
                                            <div
                                                class="dropdown-content-profile">
                                                <a href="#">Update
                                                    Profile</a>
                                                <a href="#">Change
                                                    Password</a>
                                                <a href="#">logout</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <div class="login-note-btn" id="logout-btn">
                                        <a href=""><button>Logout</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>





                    <div class="container">
                        <div class="User-Dashboard">
                            <div class="row dashboard-1">

                                <div class="col-md-6 col-sm-6 col-xs-6
                                    text-left">
                                    <h3>Dashboard</h3>
                                </div>

                            </div>
                            <div class="dashboard-detail-2">
                                <div class="flex-container-admin">

                                    <div style="flex-grow: 3" id="dash-admin-1">
                                        <div>
                                            <h6>20</h6><span>Number of Notes in
                                                Review for<br> Publish</span>
                                        </div>
                                    </div>
                                    <div style="flex-grow: 3">
                                        <div>
                                            <h6>103</h6><span>Number of New
                                                Notes Downloaded <br>(Last 7
                                                days)</span>
                                        </div>
                                    </div>
                                    <div style="flex-grow: 3" id="dash-admin-3">
                                        <div>
                                            <h6>223</h6><span>Number of New
                                                Registrations <br>(Last 7 days)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="progress-3">

                            <div class="progress-notes-2">
                                <div class="row progress-dashboard">

                                    <div class="col-md-3 admin-label">
                                        <h3>Published Notes</h3>
                                    </div>
                                    <div class="col-md-9 search-label">
                                        <div class="progress-note-btn">
                                            <div class="row">
                                                <div class="col-md-9
                                                    text-right">
                                                    <div>
                                                        <input type="text"
                                                            id="search-enter-progress"
                                                            placeholder="Search"
                                                            title="Type
                                                            in a name">
                                                        <a href=""><button>Search</button></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="select-month">
                                                        <div class="form-group">
                                                            <select
                                                                class="form-control"
                                                                id="exampleFormControlSelect2">
                                                                <option>Select
                                                                    month</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="progress-table"
                                style="overflow-x:auto;">
                                <table class="table" id="dashboard-table">
                                    <thead>
                                        <tr>

                                            <th scope="col" class="text-center">SR NO.</th>
                                            <th scope="col">TITLE</th>
                                            <th scope="col">CATEGORY</th>
                                            <th scope="col">ATTACHMENT
                                                SIZE</th>
                                            <th scope="col">SELL TYPE</th>
                                            <th scope="col">PRICE</th>
                                            <th scope="col">PUBLISHER</th>
                                            <th scope="col">PUBLISH DATE</th>
                                            <th scope="col">NUMBER OF DOWNLOADS</th>
                                            <th scope="col"></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>1</td>
                                            <td>Data Science</td>
                                            <td>Science</td>
                                            <td>10KB</td>
                                            <td>Free</td>
                                            <td>$0</td>
                                            <td>Pritesh Panchal</td>
                                            <td>09-10-2020,
                                                10:10</td>
                                            <td class="text-center">10</td>
                                            <td>
                                                <div class="dropdown
                                                    admin-table">
                                                    <a class="dropbtn"><img
                                                            src="images/Dashboard/three-dot.png"
                                                            alt="delete-icon" /></a>
                                                    <div
                                                        class="dropdown-content">
                                                        <a href="#">Download
                                                            Notes</a>
                                                        <a href="#">View More
                                                            Details</a>
                                                        <a href="#">Unpublish</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>2</td>
                                            <td>Data Science</td>
                                            <td>Science</td>
                                            <td>10KB</td>
                                            <td>Free</td>
                                            <td>$0</td>
                                            <td>Pritesh Panchal</td>
                                            <td>09-10-2020,
                                                10:10</td>
                                            <td class="text-center">10</td>
                                            <td>
                                                <div class="dropdown
                                                    admin-table">
                                                    <a class="dropbtn"><img
                                                            src="images/Dashboard/three-dot.png"
                                                            alt="delete-icon" /></a>
                                                    <div
                                                        class="dropdown-content">
                                                        <a href="#">Download
                                                            Notes</a>
                                                        <a href="#">View More
                                                            Details</a>
                                                        <a href="#">Unpublish</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>3</td>
                                            <td>Data Science</td>
                                            <td>Science</td>
                                            <td>10KB</td>
                                            <td>Free</td>
                                            <td>$0</td>
                                            <td>Pritesh Panchal</td>
                                            <td>09-10-2020,
                                                10:10</td>
                                            <td class="text-center">10</td>
                                            <td>
                                                <div class="dropdown
                                                    admin-table">
                                                    <a class="dropbtn"><img
                                                            src="images/Dashboard/three-dot.png"
                                                            alt="delete-icon" /></a>
                                                    <div
                                                        class="dropdown-content">
                                                        <a href="#">Download
                                                            Notes</a>
                                                        <a href="#">View More
                                                            Details</a>
                                                        <a href="#">Unpublish</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>4</td>
                                            <td>Data Science</td>
                                            <td>Science</td>
                                            <td>10KB</td>
                                            <td>Free</td>
                                            <td>$0</td>
                                            <td>Pritesh Panchal</td>
                                            <td>09-10-2020,
                                                10:10</td>
                                            <td class="text-center">10</td>
                                            <td>
                                                <div class="dropdown
                                                    admin-table">
                                                    <a class="dropbtn"><img
                                                            src="images/Dashboard/three-dot.png"
                                                            alt="delete-icon" /></a>
                                                    <div
                                                        class="dropdown-content">
                                                        <a href="#">Download
                                                            Notes</a>
                                                        <a href="#">View More
                                                            Details</a>
                                                        <a href="#">Unpublish</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>5</td>
                                            <td>Data Science</td>
                                            <td>Science</td>
                                            <td>10KB</td>
                                            <td>Free</td>
                                            <td>$0</td>
                                            <td>Pritesh Panchal</td>
                                            <td>09-10-2020,
                                                10:10</td>
                                            <td class="text-center">10</td>
                                            <td>
                                                <div class="dropdown
                                                    admin-table">
                                                    <a class="dropbtn"><img
                                                            src="images/Dashboard/three-dot.png"
                                                            alt="delete-icon" /></a>
                                                    <div
                                                        class="dropdown-content">
                                                        <a href="#">Download
                                                            Notes</a>
                                                        <a href="#">View More
                                                            Details</a>
                                                        <a href="#">Unpublish</a>
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
                                        <a href="#"><i class="fa
                                                fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>



                </div>


                <!-- footer section -->
                <footer id="footer">
                    <div class="footer">
                        <div class="container">
                            <div class="row">
                                <div id="text-area" class="col-md-6">
                                    <p>Version : 1.1.24</p>
                                </div>
                                <div id="icon-area" class="col-md-6">
                                    <p>Copyright <i class="fa
                                            fa-copyright"></i> TatvaSoft
                                        All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer section End -->
                </footer>

            </div>

            <!-- Jquery   -->
            <script src="js/jquery/jquery-3.5.1.min.js"></script>

            <!-- Bootstrap Js -->
            <script src="js/bootstrap/bootstrap.min.js"></script>

            <!-- Custom Js -->
            <script src="js/script.js"></script>
        </body>

    </html>
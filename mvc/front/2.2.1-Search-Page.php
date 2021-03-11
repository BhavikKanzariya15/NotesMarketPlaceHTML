<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- important meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- title -->
        <title>2.2.1-Search-Notes</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/Homepage/favicon.ico">
        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">

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
                            <a class="nav-link" href="2.2.1-Search-Page.php"><span class="sr-only">(current)</span>Search
                                Notes </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="3.3.0-Dashboard.php">Sell Your Notes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="3.5-FAQ.php">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="3.6-Contact-Us.php">Contact Us</a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">

                        <div class="login-note-btn">
                            <a href="3.1.1-Login.php"><button>Login</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </nav>



        <!-- Top Image With Text -->
        <div class="container-fluid p-0">
            <div class="Search-img-text">
                <h3 class="text-center">Search-Notes</h3>
            </div>
        </div>

        <div class="Search-filter-notes">
            <div class="container">
                <div id="notesfilter">
                    <h3>Search and Filter Notes</h3>

                    <div class="searchnotes">
                        <div class="search-filter">
                            <div class="search">
                                <input type="text" id="search-enter"
                                    placeholder="Search notes here..."
                                    title="Type in a name">
                            </div>
                            <div class="filter">
                                <div class="flex-container">
                                    <div style="flex-grow: 1"><select
                                            class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option selected>Select type</option>
                                            <option>Notes</option>
                                            <option>Material</option>
                                            <option>Hand Book</option>
                                        </select> </div>
                                    <div style="flex-grow: 1"><select
                                            class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option selected>Select category</option>
                                            <option>First</option>
                                            <option>Second</option>
                                            <option>Third</option>
                                        </select> </div>
                                    <div style="flex-grow: 1"><select
                                            class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option selected>Select university</option>
                                            <option>GECR</option>
                                            <option>IIT-Bombay</option>
                                            <option>Other</option>
                                        </select></div>
                                    <div style="flex-grow: 1"><select
                                            class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option selected>Select course</option>
                                            <option>CE</option>
                                            <option>EC</option>
                                            <option>Other</option>
                                        </select></div>
                                    <div style="flex-grow: 1"><select
                                            class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option selected>Select country</option>
                                            <option>India</option>
                                            <option>USA</option>
                                            <option>Other</option>
                                        </select></div>
                                    <div style="flex-grow: 1"><select
                                            class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option selected>Select rating</option>
                                            <option>Five</option>
                                            <option>Four</option>
                                            <option>Three</option>
                                        </select></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="total-books">
                    <div id="notes-total">
                        <h3>Total 18 Notes</h3>

                    </div>
                    <div class="notes-cards">
                        <div class="row row-notes-1">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="images/Search-Notes/1.jpg"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                       <a href ="2.2.2-Notes-Deatail.php">
                                        <h5 class="card-title">Computer
                                            Operating System - Final Exam Book
                                            with Paper Solution</h5>
                                        </a>
                                        <!-- <p class="card-text">Some quick example
                                            text to build on the card title and
                                            make up the bulk of the card's
                                            content.</p> -->
                                    </div>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <p class="card-detail-notes"><i
                                                    class="fa fa-university"></i>University
                                                of California, US</p>
                                            <p class="card-detail-notes"><i
                                                    class="fa fa-university"></i>204
                                                Pages</p>
                                            <p class="card-detail-notes"><i
                                                    class="fa fa-university"></i>thu,
                                                Nov 26 2020</p>
                                            <p class="card-detail-notes"><i
                                                    class="fa fa-flag"></i><span
                                                    style="color: red;">5 Users
                                                    marked this note as
                                                    inappropriate</span></p>
                                            <div class="row card-star">

                                                <div class="rate">
                                                    <input type="radio"
                                                        id="star5" name="rate"
                                                        value="5" />
                                                    <label for="star5"
                                                        title="text">5
                                                        stars</label>
                                                    <input type="radio"
                                                        id="star4" name="rate"
                                                        value="4" />
                                                    <label for="star4"
                                                        title="text">4
                                                        stars</label>
                                                    <input type="radio"
                                                        id="star3" name="rate"
                                                        value="3" />
                                                    <label for="star3"
                                                        title="text">3
                                                        stars</label>
                                                    <input type="radio"
                                                        id="star2" name="rate"
                                                        value="2" />
                                                    <label for="star2"
                                                        title="text">2
                                                        stars</label>
                                                    <input type="radio"
                                                        id="star1" name="rate"
                                                        value="1" />
                                                    <label for="star1"
                                                        title="text">1
                                                        star</label>

                                                </div><span>100 Reviews<span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img src="images/Search-Notes/2.jpg"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                               <a href ="2.2.2-Notes-Deatail.php">
                                                <h5 class="card-title">Computer
                                                    Science</h5>
                                                </a>
                                            </div>

                                            <ul class="list-group
                                                list-group-flush">
                                                <li class="list-group-item">
                                                    <p
                                                        class="card-detail-notes"><i
                                                            class="fa
                                                            fa-university"></i>University
                                                        of California, US</p>
                                                    <p
                                                        class="card-detail-notes"><i
                                                            class="fa
                                                            fa-university"></i>204
                                                        Pages</p>
                                                    <p
                                                        class="card-detail-notes"><i
                                                            class="fa
                                                            fa-university"></i>thu,
                                                        Nov 26 2020</p>
                                                    <p
                                                        class="card-detail-notes"><i
                                                            class="fa fa-flag"></i><span
                                                            style="color: red;">5
                                                            Users
                                                            marked this note as
                                                            inappropriate</span></p>
                                                    <div class="row card-star">
                                                        <div class="rate">
                                                            <input type="radio"
                                                                id="star5"
                                                                name="rate"
                                                                value="5" />
                                                            <label for="star5"
                                                                title="text">5
                                                                stars</label>
                                                            <input type="radio"
                                                                id="star4"
                                                                name="rate"
                                                                value="4" />
                                                            <label for="star4"
                                                                title="text">4
                                                                stars</label>
                                                            <input type="radio"
                                                                id="star3"
                                                                name="rate"
                                                                value="3" />
                                                            <label for="star3"
                                                                title="text">3
                                                                stars</label>
                                                            <input type="radio"
                                                                id="star2"
                                                                name="rate"
                                                                value="2" />
                                                            <label for="star2"
                                                                title="text">2
                                                                stars</label>
                                                            <input type="radio"
                                                                id="star1"
                                                                name="rate"
                                                                value="1" />
                                                            <label for="star1"
                                                                title="text">1
                                                                star</label>
                                                        </div><span>100 Reviews<span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <img
                                                        src="images/Search-Notes/3.jpg"
                                                        class="card-img-top"
                                                        alt="...">
                                                    <div class="card-body">
                                                       <a href ="2.2.2-Notes-Deatail.php">
                                                        <h5 class="card-title">Basic
                                                            Computer Engineering
                                                            Tech India
                                                            Publication Series</h5>
                                                        </a>
                                                        <!-- <p class="card-text">Some quick example
                                                                        text to build on the card title and
                                                                        make up the bulk of the card's
                                                                        content.</p> -->
                                                    </div>

                                                    <ul class="list-group
                                                        list-group-flush">
                                                        <li
                                                            class="list-group-item">
                                                            <p
                                                                class="card-detail-notes"><i
                                                                    class="fa
                                                                    fa-university"></i>University
                                                                of California,
                                                                US</p>
                                                            <p
                                                                class="card-detail-notes"><i
                                                                    class="fa
                                                                    fa-university"></i>204
                                                                Pages</p>
                                                            <p
                                                                class="card-detail-notes"><i
                                                                    class="fa
                                                                    fa-university"></i>thu,
                                                                Nov 26 2020</p>
                                                            <p
                                                                class="card-detail-notes"><i
                                                                    class="fa
                                                                    fa-flag"></i><span
                                                                    style="color:
                                                                    red;">5
                                                                    Users
                                                                    marked this
                                                                    note as
                                                                    inappropriate</span></p>
                                                            <div class="row
                                                                card-star">

                                                                <div
                                                                    class="rate">
                                                                    <input
                                                                        type="radio"
                                                                        id="star5"
                                                                        name="rate"
                                                                        value="5"
                                                                        />
                                                                    <label
                                                                        for="star5"
                                                                        title="text">5
                                                                        stars</label>
                                                                    <input
                                                                        type="radio"
                                                                        id="star4"
                                                                        name="rate"
                                                                        value="4"
                                                                        />
                                                                    <label
                                                                        for="star4"
                                                                        title="text">4
                                                                        stars</label>
                                                                    <input
                                                                        type="radio"
                                                                        id="star3"
                                                                        name="rate"
                                                                        value="3"
                                                                        />
                                                                    <label
                                                                        for="star3"
                                                                        title="text">3
                                                                        stars</label>
                                                                    <input
                                                                        type="radio"
                                                                        id="star2"
                                                                        name="rate"
                                                                        value="2"
                                                                        />
                                                                    <label
                                                                        for="star2"
                                                                        title="text">2
                                                                        stars</label>
                                                                    <input
                                                                        type="radio"
                                                                        id="star1"
                                                                        name="rate"
                                                                        value="1"
                                                                        />
                                                                    <label
                                                                        for="star1"
                                                                        title="text">1
                                                                        star</label>
                                                                </div><span>100
                                                                    Reviews<span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row row-notes-1">
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            <img
                                                                src="images/Search-Notes/4.jpg"
                                                                class="card-img-top"
                                                                alt="...">
                                                            <div
                                                                class="card-body">
                                                                <a href ="2.2.2-Notes-Deatail.php">
                                                                <h5
                                                                    class="card-title">Computer
                                                                    Science</h5>
                                                                </a>
                                                            </div>

                                                            <ul
                                                                class="list-group
                                                                list-group-flush">
                                                                <li
                                                                    class="list-group-item">
                                                                    <p
                                                                        class="card-detail-notes"><i
                                                                            class="fa
                                                                            fa-university"></i>University
                                                                        of
                                                                        California,
                                                                        US</p>
                                                                    <p
                                                                        class="card-detail-notes"><i
                                                                            class="fa
                                                                            fa-university"></i>204
                                                                        Pages</p>
                                                                    <p
                                                                        class="card-detail-notes"><i
                                                                            class="fa
                                                                            fa-university"></i>thu,
                                                                        Nov 26
                                                                        2020</p>
                                                                    <p
                                                                        class="card-detail-notes"><i
                                                                            class="fa
                                                                            fa-flag"></i><span
                                                                            style="color:
                                                                            red;">5
                                                                            Users
                                                                            marked
                                                                            this
                                                                            note
                                                                            as
                                                                            inappropriate</span></p>
                                                                    <div
                                                                        class="row
                                                                        card-star">
                                                                        <div
                                                                            class="rate">
                                                                            <input
                                                                                type="radio"
                                                                                id="star5"
                                                                                name="rate"
                                                                                value="5"
                                                                                />
                                                                            <label
                                                                                for="star5"
                                                                                title="text">5
                                                                                stars</label>
                                                                            <input
                                                                                type="radio"
                                                                                id="star4"
                                                                                name="rate"
                                                                                value="4"
                                                                                />
                                                                            <label
                                                                                for="star4"
                                                                                title="text">4
                                                                                stars</label>
                                                                            <input
                                                                                type="radio"
                                                                                id="star3"
                                                                                name="rate"
                                                                                value="3"
                                                                                />
                                                                            <label
                                                                                for="star3"
                                                                                title="text">3
                                                                                stars</label>
                                                                            <input
                                                                                type="radio"
                                                                                id="star2"
                                                                                name="rate"
                                                                                value="2"
                                                                                />
                                                                            <label
                                                                                for="star2"
                                                                                title="text">2
                                                                                stars</label>
                                                                            <input
                                                                                type="radio"
                                                                                id="star1"
                                                                                name="rate"
                                                                                value="1"
                                                                                />
                                                                            <label
                                                                                for="star1"
                                                                                title="text">1
                                                                                star</label>
                                                                        </div><span>100
                                                                            Reviews<span>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-md-4">
                                                                <div
                                                                    class="card">
                                                                    <img
                                                                        src="images/Search-Notes/5.jpg"
                                                                        class="card-img-top"
                                                                        alt="...">
                                                                    <div
                                                                        class="card-body">
                                                                        <a href ="2.2.2-Notes-Deatail.php">
                                                                        <h5
                                                                            class="card-title">Basic
                                                                            Computer
                                                                            Engineering
                                                                            Tech
                                                                            India
                                                                            Publication
                                                                            Series</h5>
                                                                        </a>
                                                                    </div>

                                                                    <ul
                                                                        class="list-group
                                                                        list-group-flush">
                                                                        <li
                                                                            class="list-group-item">
                                                                            <p
                                                                                class="card-detail-notes"><i
                                                                                    class="fa
                                                                                    fa-university"></i>University
                                                                                of
                                                                                California,
                                                                                US</p>
                                                                            <p
                                                                                class="card-detail-notes"><i
                                                                                    class="fa
                                                                                    fa-university"></i>204
                                                                                Pages</p>
                                                                            <p
                                                                                class="card-detail-notes"><i
                                                                                    class="fa
                                                                                    fa-university"></i>thu,
                                                                                Nov
                                                                                26
                                                                                2020</p>
                                                                            <p
                                                                                class="card-detail-notes"><i
                                                                                    class="fa
                                                                                    fa-flag"></i><span
                                                                                    style="color:
                                                                                    red;">5
                                                                                    Users
                                                                                    marked
                                                                                    this
                                                                                    note
                                                                                    as
                                                                                    inappropriate</span></p>
                                                                            <div
                                                                                class="row
                                                                                card-star">
                                                                                <div
                                                                                    class="rate">
                                                                                    <input
                                                                                        type="radio"
                                                                                        id="star5"
                                                                                        name="rate"
                                                                                        value="5"
                                                                                        />
                                                                                    <label
                                                                                        for="star5"
                                                                                        title="text">5
                                                                                        stars</label>
                                                                                    <input
                                                                                        type="radio"
                                                                                        id="star4"
                                                                                        name="rate"
                                                                                        value="4"
                                                                                        />
                                                                                    <label
                                                                                        for="star4"
                                                                                        title="text">4
                                                                                        stars</label>
                                                                                    <input
                                                                                        type="radio"
                                                                                        id="star3"
                                                                                        name="rate"
                                                                                        value="3"
                                                                                        />
                                                                                    <label
                                                                                        for="star3"
                                                                                        title="text">3
                                                                                        stars</label>
                                                                                    <input
                                                                                        type="radio"
                                                                                        id="star2"
                                                                                        name="rate"
                                                                                        value="2"
                                                                                        />
                                                                                    <label
                                                                                        for="star2"
                                                                                        title="text">2
                                                                                        stars</label>
                                                                                    <input
                                                                                        type="radio"
                                                                                        id="star1"
                                                                                        name="rate"
                                                                                        value="1"
                                                                                        />
                                                                                    <label
                                                                                        for="star1"
                                                                                        title="text">1
                                                                                        star</label>
                                                                                </div><span>100
                                                                                    Reviews<span>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="col-md-4">
                                                                        <div
                                                                            class="card">
                                                                            <img
                                                                                src="images/Search-Notes/6.jpg"
                                                                                class="card-img-top"
                                                                                alt="...">
                                                                            <div
                                                                                class="card-body">
                                                                                <a href ="2.2.2-Notes-Deatail.php">
                                                                                <h5
                                                                                    class="card-title">Computer
                                                                                    Operating
                                                                                    System
                                                                                    -
                                                                                    Final
                                                                                    Exam
                                                                                    Book
                                                                                    with
                                                                                    Paper
                                                                                    Solution</h5>
                                                                                </a>
                                                                            </div>
                                                                            <ul
                                                                                class="list-group
                                                                                list-group-flush">
                                                                                <li
                                                                                    class="list-group-item">
                                                                                    <p
                                                                                        class="card-detail-notes"><i
                                                                                            class="fa
                                                                                            fa-university"></i>University
                                                                                        of
                                                                                        California,
                                                                                        US</p>
                                                                                    <p
                                                                                        class="card-detail-notes"><i
                                                                                            class="fa
                                                                                            fa-university"></i>204
                                                                                        Pages</p>
                                                                                    <p
                                                                                        class="card-detail-notes"><i
                                                                                            class="fa
                                                                                            fa-university"></i>thu,
                                                                                        Nov
                                                                                        26
                                                                                        2020</p>
                                                                                    <p
                                                                                        class="card-detail-notes"><i
                                                                                            class="fa
                                                                                            fa-flag"></i><span
                                                                                            style="color:
                                                                                            red;">5
                                                                                            Users
                                                                                            marked
                                                                                            this
                                                                                            note
                                                                                            as
                                                                                            inappropriate</span></p>
                                                                                    <div
                                                                                        class="row
                                                                                        card-star">
                                                                                        <div
                                                                                            class="rate">
                                                                                            <input
                                                                                                type="radio"
                                                                                                id="star5"
                                                                                                name="rate"
                                                                                                value="5"
                                                                                                />
                                                                                            <label
                                                                                                for="star5"
                                                                                                title="text">5
                                                                                                stars</label>
                                                                                            <input
                                                                                                type="radio"
                                                                                                id="star4"
                                                                                                name="rate"
                                                                                                value="4"
                                                                                                />
                                                                                            <label
                                                                                                for="star4"
                                                                                                title="text">4
                                                                                                stars</label>
                                                                                            <input
                                                                                                type="radio"
                                                                                                id="star3"
                                                                                                name="rate"
                                                                                                value="3"
                                                                                                />
                                                                                            <label
                                                                                                for="star3"
                                                                                                title="text">3
                                                                                                stars</label>
                                                                                            <input
                                                                                                type="radio"
                                                                                                id="star2"
                                                                                                name="rate"
                                                                                                value="2"
                                                                                                />
                                                                                            <label
                                                                                                for="star2"
                                                                                                title="text">2
                                                                                                stars</label>
                                                                                            <input
                                                                                                type="radio"
                                                                                                id="star1"
                                                                                                name="rate"
                                                                                                value="1"
                                                                                                />
                                                                                            <label
                                                                                                for="star1"
                                                                                                title="text">1
                                                                                                star</label>
                                                                                        </div><span>100
                                                                                            Reviews<span>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="row
                                                                            row-notes-1">
                                                                            <div
                                                                                class="col-md-4">
                                                                                <div
                                                                                    class="card">
                                                                                    <img
                                                                                        src="images/Search-Notes/3.jpg"
                                                                                        class="card-img-top"
                                                                                        alt="...">
                                                                                    <div
                                                                                        class="card-body">
                                                                                        <a href ="2.2.2-Notes-Deatail.php">
                                                                                        <h5
                                                                                            class="card-title">Computer
                                                                                            Science</h5>
                                                                                        </a>
                                                                                        <!-- <p class="card-text">Some quick example
                                                                                            text to build on the card title and
                                                                                            make up the bulk of the card's
                                                                                            content.</p> -->
                                                                                    </div>
                                                                                    <ul
                                                                                        class="list-group
                                                                                        list-group-flush">
                                                                                        <li
                                                                                            class="list-group-item">
                                                                                            <p
                                                                                                class="card-detail-notes"><i
                                                                                                    class="fa
                                                                                                    fa-university"></i>University
                                                                                                of
                                                                                                California,
                                                                                                US</p>
                                                                                            <p
                                                                                                class="card-detail-notes"><i
                                                                                                    class="fa
                                                                                                    fa-university"></i>204
                                                                                                Pages</p>
                                                                                            <p
                                                                                                class="card-detail-notes"><i
                                                                                                    class="fa
                                                                                                    fa-university"></i>thu,
                                                                                                Nov
                                                                                                26
                                                                                                2020</p>
                                                                                            <p
                                                                                                class="card-detail-notes"><i
                                                                                                    class="fa
                                                                                                    fa-flag"></i><span
                                                                                                    style="color:
                                                                                                    red;">5
                                                                                                    Users
                                                                                                    marked
                                                                                                    this
                                                                                                    note
                                                                                                    as
                                                                                                    inappropriate</span></p>
                                                                                            <div
                                                                                                class="row
                                                                                                card-star">
                                                                                                <div
                                                                                                    class="rate">
                                                                                                    <input
                                                                                                        type="radio"
                                                                                                        id="star5"
                                                                                                        name="rate"
                                                                                                        value="5"
                                                                                                        />
                                                                                                    <label
                                                                                                        for="star5"
                                                                                                        title="text">5
                                                                                                        stars</label>
                                                                                                    <input
                                                                                                        type="radio"
                                                                                                        id="star4"
                                                                                                        name="rate"
                                                                                                        value="4"
                                                                                                        />
                                                                                                    <label
                                                                                                        for="star4"
                                                                                                        title="text">4
                                                                                                        stars</label>
                                                                                                    <input
                                                                                                        type="radio"
                                                                                                        id="star3"
                                                                                                        name="rate"
                                                                                                        value="3"
                                                                                                        />
                                                                                                    <label
                                                                                                        for="star3"
                                                                                                        title="text">3
                                                                                                        stars</label>
                                                                                                    <input
                                                                                                        type="radio"
                                                                                                        id="star2"
                                                                                                        name="rate"
                                                                                                        value="2"
                                                                                                        />
                                                                                                    <label
                                                                                                        for="star2"
                                                                                                        title="text">2
                                                                                                        stars</label>
                                                                                                    <input
                                                                                                        type="radio"
                                                                                                        id="star1"
                                                                                                        name="rate"
                                                                                                        value="1"
                                                                                                        />
                                                                                                    <label
                                                                                                        for="star1"
                                                                                                        title="text">1
                                                                                                        star</label>
                                                                                                </div><span>100
                                                                                                    Reviews<span>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-4">
                                                                                        <div
                                                                                            class="card">
                                                                                            <img
                                                                                                src="images/Search-Notes/5.jpg"
                                                                                                class="card-img-top"
                                                                                                alt="...">
                                                                                            <div
                                                                                                class="card-body">
                                                                                                <a href ="2.2.2-Notes-Deatail.php">
                                                                                                <h5
                                                                                                    class="card-title">Computer
                                                                                                    Operating
                                                                                                    System
                                                                                                    -
                                                                                                    Final
                                                                                                    Exam
                                                                                                    Book
                                                                                                    with
                                                                                                    Paper
                                                                                                    Solution</h5>
                                                                                                </a>
                                                                                                <!-- <p class="card-text">Some quick example
                                                                                                                        text to build on the card title and
                                                                                                                        make up the bulk of the card's
                                                                                                                        content.</p> -->
                                                                                            </div>
                                                                                            <ul
                                                                                                class="list-group
                                                                                                list-group-flush">
                                                                                                <li
                                                                                                    class="list-group-item">
                                                                                                    <p
                                                                                                        class="card-detail-notes"><i
                                                                                                            class="fa
                                                                                                            fa-university"></i>University
                                                                                                        of
                                                                                                        California,
                                                                                                        US</p>
                                                                                                    <p
                                                                                                        class="card-detail-notes"><i
                                                                                                            class="fa
                                                                                                            fa-university"></i>204
                                                                                                        Pages</p>
                                                                                                    <p
                                                                                                        class="card-detail-notes"><i
                                                                                                            class="fa
                                                                                                            fa-university"></i>thu,
                                                                                                        Nov
                                                                                                        26
                                                                                                        2020</p>
                                                                                                    <p
                                                                                                        class="card-detail-notes"><i
                                                                                                            class="fa
                                                                                                            fa-flag"></i><span
                                                                                                            style="color:
                                                                                                            red;">5
                                                                                                            Users
                                                                                                            marked
                                                                                                            this
                                                                                                            note
                                                                                                            as
                                                                                                            inappropriate</span></p>
                                                                                                    <div
                                                                                                        class="row
                                                                                                        card-star">
                                                                                                        <div
                                                                                                            class="rate">
                                                                                                            <input
                                                                                                                type="radio"
                                                                                                                id="star5"
                                                                                                                name="rate"
                                                                                                                value="5"
                                                                                                                />
                                                                                                            <label
                                                                                                                for="star5"
                                                                                                                title="text">5
                                                                                                                stars</label>
                                                                                                            <input
                                                                                                                type="radio"
                                                                                                                id="star4"
                                                                                                                name="rate"
                                                                                                                value="4"
                                                                                                                />
                                                                                                            <label
                                                                                                                for="star4"
                                                                                                                title="text">4
                                                                                                                stars</label>
                                                                                                            <input
                                                                                                                type="radio"
                                                                                                                id="star3"
                                                                                                                name="rate"
                                                                                                                value="3"
                                                                                                                />
                                                                                                            <label
                                                                                                                for="star3"
                                                                                                                title="text">3
                                                                                                                stars</label>
                                                                                                            <input
                                                                                                                type="radio"
                                                                                                                id="star2"
                                                                                                                name="rate"
                                                                                                                value="2"
                                                                                                                />
                                                                                                            <label
                                                                                                                for="star2"
                                                                                                                title="text">2
                                                                                                                stars</label>
                                                                                                            <input
                                                                                                                type="radio"
                                                                                                                id="star1"
                                                                                                                name="rate"
                                                                                                                value="1"
                                                                                                                />
                                                                                                            <label
                                                                                                                for="star1"
                                                                                                                title="text">1
                                                                                                                star</label>
                                                                                                        </div><span>100
                                                                                                            Reviews<span>
                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-md-4">
                                                                                                <div
                                                                                                    class="card">
                                                                                                    <img
                                                                                                        src="images/Search-Notes/4.jpg"
                                                                                                        class="card-img-top"
                                                                                                        alt="...">
                                                                                                    <div
                                                                                                        class="card-body">
                                                                                                        <a href ="2.2.2-Notes-Deatail.php">
                                                                                                        <h5
                                                                                                            class="card-title">Basic
                                                                                                            Computer
                                                                                                            Engineering
                                                                                                            Tech
                                                                                                            India
                                                                                                            Publication
                                                                                                            Series</h5>
                                                                                                        </a>
                                                                                                        <!-- <p class="card-text">Some quick example
                                                                                                                        text to build on the card title and
                                                                                                                        make up the bulk of the card's
                                                                                                                        content.</p> -->
                                                                                                    </div>
                                                                                                    <ul
                                                                                                        class="list-group
                                                                                                        list-group-flush">
                                                                                                        <li
                                                                                                            class="list-group-item">
                                                                                                            <p
                                                                                                                class="card-detail-notes"><i
                                                                                                                    class="fa
                                                                                                                    fa-university"></i>University
                                                                                                                of
                                                                                                                California,
                                                                                                                US</p>
                                                                                                            <p
                                                                                                                class="card-detail-notes"><i
                                                                                                                    class="fa
                                                                                                                    fa-university"></i>204
                                                                                                                Pages</p>
                                                                                                            <p
                                                                                                                class="card-detail-notes"><i
                                                                                                                    class="fa
                                                                                                                    fa-university"></i>thu,
                                                                                                                Nov
                                                                                                                26
                                                                                                                2020</p>
                                                                                                            <p
                                                                                                                class="card-detail-notes"><i
                                                                                                                    class="fa
                                                                                                                    fa-flag"></i><span
                                                                                                                    style="color:
                                                                                                                    red;">5
                                                                                                                    Users
                                                                                                                    marked
                                                                                                                    this
                                                                                                                    note
                                                                                                                    as
                                                                                                                    inappropriate</span></p>
                                                                                                            <div
                                                                                                                class="row
                                                                                                                card-star">
                                                                                                                <div
                                                                                                                    class="rate">
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        id="star5"
                                                                                                                        name="rate"
                                                                                                                        value="5"
                                                                                                                        />
                                                                                                                    <label
                                                                                                                        for="star5"
                                                                                                                        title="text">5
                                                                                                                        stars</label>
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        id="star4"
                                                                                                                        name="rate"
                                                                                                                        value="4"
                                                                                                                        />
                                                                                                                    <label
                                                                                                                        for="star4"
                                                                                                                        title="text">4
                                                                                                                        stars</label>
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        id="star3"
                                                                                                                        name="rate"
                                                                                                                        value="3"
                                                                                                                        />
                                                                                                                    <label
                                                                                                                        for="star3"
                                                                                                                        title="text">3
                                                                                                                        stars</label>
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        id="star2"
                                                                                                                        name="rate"
                                                                                                                        value="2"
                                                                                                                        />
                                                                                                                    <label
                                                                                                                        for="star2"
                                                                                                                        title="text">2
                                                                                                                        stars</label>
                                                                                                                    <input
                                                                                                                        type="radio"
                                                                                                                        id="star1"
                                                                                                                        name="rate"
                                                                                                                        value="1"
                                                                                                                        />
                                                                                                                    <label
                                                                                                                        for="star1"
                                                                                                                        title="text">1
                                                                                                                        star</label>
                                                                                                                </div><span>100
                                                                                                                    Reviews<span>
                                                                                                                    </div>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="pagination-section">
                                                                                            <div
                                                                                                class="pagination-notes">
                                                                                                <div
                                                                                                    class="pagination-number">
                                                                                                    <a
                                                                                                        href="#"><i
                                                                                                            class="fa
                                                                                                            fa-angle-left"></i></a>
                                                                                                    <a
                                                                                                        href="#"
                                                                                                        class="active">1</a>
                                                                                                    <a
                                                                                                        href="#">2</a>
                                                                                                    <a
                                                                                                        href="#">3</a>
                                                                                                    <a
                                                                                                        href="#">4</a>
                                                                                                    <a
                                                                                                        href="#">5</a>
                                                                                                    <a
                                                                                                        href="#"><i
                                                                                                            class="fa
                                                                                                            fa-angle-right"></i></a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- footer section -->
                                                                                <div
                                                                                    class="footer-wrapper">
                                                                                    <div
                                                                                        class="container">
                                                                                        <div
                                                                                            class="row">
                                                                                            <div
                                                                                                id="text-area"
                                                                                                class="col-md-6">
                                                                                                <p>Copyright
                                                                                                    <i
                                                                                                        class="fa
                                                                                                        fa-copyright"></i>
                                                                                                    TatvaSoft
                                                                                                    All
                                                                                                    rights
                                                                                                    reserved.
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                id="icon-area"
                                                                                                class="col-md-6">
                                                                                                <ul
                                                                                                    class="social-list">
                                                                                                    <li><a
                                                                                                            href="#"><i
                                                                                                                class="fa
                                                                                                                fa-facebook"></i></a></li>
                                                                                                    <li><a
                                                                                                            href="#"><i
                                                                                                                class="fa
                                                                                                                fa-twitter"></i></a></li>
                                                                                                    <li><a
                                                                                                            href="#"><i
                                                                                                                class="fa
                                                                                                                fa-linkedin"></i></a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- footer section End -->
                                                                                <!-- Optional JavaScript -->
                                                                                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                                                                                <script
                                                                                    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
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
                                                                                <script
                                                                                    src="js/jquery/jquery-3.5.1.min.js"></script>
                                                                                <!-- Bootstrap Js -->
                                                                                <script
                                                                                    src="js/bootstrap/bootstrap.min.js"></script>
                                                                                <!-- Custom Js -->
                                                                                <script
                                                                                    src="js/script.js"></script>
                                                                            </body>
                                                                        </html>

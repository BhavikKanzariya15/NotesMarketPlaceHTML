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
        <title>3.3.1-Add-Notes</title>
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
    include 'send_mail.php';
    
    $user_id = "";
    $user_id = $_SESSION['user_id'];
    $isflag = 0;
    $name_to_store_np = "";
    $name_to_store_dp = "";
    $selling_price = "";
    $last_inserted_id = "";
    $is_note_inserted = "false";
    $last_query = "";
    
    
    if(isset($_POST['submit'])) {
        
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $note_type = mysqli_real_escape_string($conn, $_POST['note-type']);
        $number_of_pages = mysqli_real_escape_string($conn, $_POST['number-of-pages']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $institute_name = mysqli_real_escape_string($conn, $_POST['institute-name']);
        $course_name = mysqli_real_escape_string($conn, $_POST['course-name']);
        $course_code = mysqli_real_escape_string($conn, $_POST['course-code']);
        $professor_name = mysqli_real_escape_string($conn, $_POST['professor-name']);
        $sellingtype = mysqli_real_escape_string($conn, $_POST['sellingtype']);
        $sellprice = mysqli_real_escape_string($conn, $_POST['sellprice']);
        $note_preview = $_FILES['note-preview'];
        $display_picture = $_FILES['display-picture'];
        $notes_data = $_FILES['notes-data'];
        
                // note previe file data
                $note_preview_filename = $note_preview['name'];
                $note_preview_fileerror = $note_preview['error'];
                $note_preview_filetemp = $note_preview['tmp_name'];

                $note_preview_fileext = explode('.',$note_preview_filename);
                $note_preview_filecheck = strtolower(end($note_preview_fileext));
                $note_preview_ext = end($note_preview_fileext);

                $fileextstored = array('pdf');
        
                
            // display picture file data
                $display_pic_filename = $display_picture['name'];
                $display_pic_fileerror = $display_picture['error'];
                $display_pic_filetemp = $display_picture['tmp_name'];
                
                $display_pic_fileext = explode('.',$display_pic_filename);
                $display_pic_filecheck = strtolower(end($display_pic_fileext));
                $display_pic_ext = end($display_pic_fileext);
                $display_pic_fileextstored = array('png', 'jpg', 'jpeg');

                
        if($sellingtype == "0") {
            
            if(!empty($note_preview_filename)) {
                if(in_array($note_preview_filecheck,$fileextstored)) {
                
                //$destinationfile2 = '../Members/'.$note_preview_filename;
                //move_uploaded_file($note_preview_filetemp,$destinationfile2);
                $name_to_store_np = $note_preview_filename;    
            
                } else {
                    ?>
                <script>
                    alert("select proper file type for preview 1")
                </script>
                <?php
                }
                
            } // free with preview end
            
        } // free selling off
        else {
            if(!empty($sellprice) && !empty($note_preview_filename)) {
                if(in_array($note_preview_filecheck,$fileextstored)) {
            
                $name_to_store_np = $note_preview_filename;    
            
                } else {
                      ?>
                <script>
                    alert("select proper file type for preview 2")
                </script>
                <?php
                }
            }
        } // paid selling off
        
        if(!empty($display_pic_filename)) {
            if(in_array($display_pic_filecheck,$display_pic_fileextstored)) {
                
                $name_to_store_dp = $display_pic_filename;    
            
                } else {
                    ?>
                <script>
                    alert("select proper file type for preview 2")
                </script>
                <?php
                }
            
        } // display pic provided end 
        else {
            
        } // default display pic end
        
        if(!empty($title) && !empty($category) && !empty($notes_data) && !empty($note_type) && !empty($description) && !empty($country) && !empty($institute_name) && !empty($course_name) && !empty($course_code)) {
            
            if($sellingtype == "1") {
                if(!empty($sellprice) && !empty($name_to_store_np)) {
                    $selling_price = $sellprice;
                    
                    
                    $insert_note_query = "INSERT INTO `sellernotes` (`SellerID`, `Status`, `ActionedBy`, `AdminRemarks`, `PublishedDate`, `Title`, `Category`, `DisplayPicture`, `NoteType`, `NumberOfPages`, `Description`, `UniversityName`, `Country`, `Course`, `CourseCode`, `Professor`, `IsPaid`, `SellingPrice`, `NotesPreview`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES ($user_id, '6', $user_id, 'best', current_timestamp(), '$title', $category, '$name_to_store_dp', $note_type, $number_of_pages, '$description', '$institute_name', $country, '$course_name', '$course_code', '$professor_name', b'$sellingtype', '$selling_price', '$name_to_store_np', current_timestamp(), '1', current_timestamp(), '1', b'1')";
                    
                    $inotequery = mysqli_query($conn, $insert_note_query);
                    
                    if($inotequery) {
                        $is_note_inserted = "true";
                         $last_inserted_id = mysqli_insert_id($conn);
                            echo "last entry paid id:" . $last_inserted_id ;
                        echo "last entry paid id:" . $last_inserted_id;
                        $_SESSION['last_id'] = $last_inserted_id;
                        $_SESSION['note_title'] = $title;
                        echo "happy";
                        echo $_SESSION['last_id'];
                        echo $_SESSION['note_title'];
                    } else {
                        ?>
                <script>
                    alert("query fail to insert with paid note")
                </script>
                <?php
                    }
                    
                    
                } // paid note with selling price end
                else {
                     ?>
                <script>
                    alert("please enter selling amount and notes preview")
                </script>
                <?php
                } // paid note withour selling price
            } // paid note inserted successfully
            else {
                $selling_price = 0;
                
                $insert_note_query = "INSERT INTO `sellernotes` (`SellerID`, `Status`, `ActionedBy`, `AdminRemarks`, `PublishedDate`, `Title`, `Category`, `DisplayPicture`, `NoteType`, `NumberofPages`, `Description`, `UniversityName`, `Country`, `Course`, `CourseCode`, `Professor`, `IsPaid`, `SellingPrice`, `NotesPreview`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES ($user_id, '6', $user_id, 'best', current_timestamp(), '$title', $category, '$name_to_store_dp', $note_type, $number_of_pages, '$description', '$institute_name', $country, '$course_name', '$course_code', '$professor_name', b'$sellingtype', '$selling_price', '$name_to_store_np', current_timestamp(), '1', current_timestamp(), '1', b'1')";
                    
                    $inotequery = mysqli_query($conn, $insert_note_query);
                    
                    if($inotequery) {
                        $is_note_inserted = "true";
                         $last_inserted_id = mysqli_insert_id($conn);
                        
                        echo "last entry paid id:" . $last_inserted_id;
                        $_SESSION['last_id'] = $last_inserted_id;
                        $_SESSION['note_title'] = $title;
                        echo "happy";
                        echo $_SESSION['last_id'];
                        echo $_SESSION['note_title'];
                    } else {
                        ?>
                <script>
                    alert("query fail to insert with free note")
                </script>
                <?php
                    }
            }
            
        } // all field provided ends
        else {
            echo "all fields are required please fill all fields..";
            
        } // missing some field ends
        
        if($is_note_inserted == "true") {
            
            if(!empty($last_inserted_id)) {
                
                // notes atteachments file data

                $atta_count = count($_FILES['notes-data']['name']);
                echo $atta_count;
                for($i=0; $i<$atta_count; $i++) {
                    $notes_data_filename = $_FILES['notes-data']['name'][$i];
                    $notes_data_filetemp = $_FILES['notes-data']['tmp_name'][$i];
                    
                    $note_date_fileext = explode('.',$notes_data_filename);
                    $note_data_filecheck = strtolower(end($note_date_fileext));
                    $note_data_ext = end($note_date_fileext);
                    
                    if(in_array($note_data_filecheck,$fileextstored)) {
                
                        $store_name_atta = "Attachement_" . $i . "_" . date("dmyhis") . "." . $note_data_ext;
                        $atta_path = "../Members/$user_id/$last_inserted_id/Attachements/$store_name_atta"; 

                        $insert_attachements = "INSERT INTO `sellernotesattachements`(`NoteID`, `FileName`, `FilePath`, `CreatedDate`, `CreatedBy`, `ModifiedDate`, `ModifiedBy`, `IsActive`) VALUES ($last_inserted_id, '$store_name_atta', '$atta_path', current_timestamp(), '1', current_timestamp(), '1', b'1')";


                        date_default_timezone_set('Asia/Kolkata');


                        if(!is_dir("../Members/$user_id/$last_inserted_id/Attachements")) {
                            mkdir("../Members/$user_id/$last_inserted_id/Attachements", 0777, true);
                        }
                        move_uploaded_file($notes_data_filetemp, "../Members/$user_id/$last_inserted_id/Attachements/$store_name_atta"); 

                        $ins_atta_query = mysqli_query($conn, $insert_attachements);
                        if(!($ins_atta_query)) {
                            die("QUERY FAILED".mysqli_error($conn));
                        }    
            
                    } else {
                         ?>
                <script>
                    alert("select proper file type for note attachements")
                </script>
                <?php
                    }
                    
                } // for loop over
                
                $store_name_dp = "DP_". date("dmyhis") . "." . $display_pic_ext;
                $store_name_np = "Preview_". date("dmyhis") . "." . $note_preview_ext;
                if(!is_dir("../Members/$user_id/$last_inserted_id")) {
                    mkdir("../Members/$user_id/$last_inserted_id", 0777, true);
                }
                    
                move_uploaded_file($display_pic_filetemp, "../Members/$user_id/$last_inserted_id/$store_name_dp");
                if (!empty($note_preview_filetemp)) {
                    move_uploaded_file($note_preview_filetemp, "../Members/$user_id/$last_inserted_id/$store_name_np");     
                }   
                $isflag = 1;
            } // notes attachements are stored and files are moved to folder
            else {
                 ?>
                <script>
                    alert("somthing want wrong")
                </script>
                <?php
            }
            $is_note_inserted == "true";
        }
    }
    
    if(isset($_POST['publish'])) {
    
                $last_note_id = $_SESSION['last_id'];
                $seller_email = $_SESSION['email'];
                $seller_name =  $_SESSION['username'];
                $note_title = $_SESSION['note_title'];
                $query = "UPDATE sellernotes SET Status = 7 WHERE ID = $last_note_id";
                $uquery = mysqli_query($conn, $query);
                if($uquery) {
                    
                    // This email address and name will be visible as sender of email

                    $mail->addAddress($seller_email);  // This email is where you want to send the email
                    $mail->addReplyTo($config_email);   // If receiver replies to the email, it will be sent to this email address

                    // Setting the email content
                    $mail->IsHTML(true);  
                    $mail->Subject = "$seller_name sent his note for review"; 

                    $mail->Body = "Hello Admins,<br><br> We want to inform you that, $seller_name sent his note <br> $note_title for review. Please look at the notes and take required actions. <br><br> Regards,<br>Notes Marketplace";

                    if(!$mail->send()) {
                        ?>
                        <script>
                            alert('somthing went wrong');
                        </script>
                        <?php
                    }
                    else {
                        header('location:http://localhost/Notes-marketplace/SRS_Notes/front/dashboard.php');
                    }    
                }else {
                    ?>
                <script>
                    alert("query fail")
                </script>
                <?php
                }
        
        } 
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
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown-profile">
                                <a class="dropbtn-profile nav-link" href="#"><img
                                        src="images/Notes-Details/client-1.jpg"
                                        alt="customer-image"></a>
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

        <!-- Top Image With Text -->
        <div class="container-fluid p-0">
            <div class="banner-img-text">
                <h3 class="text-center">Add Notes</h3>
            </div>
        </div>

        <!-- Form Area -->
        <div class="client-profile">

            <form>

                <div class="container">

                    <!-- Basic Profile Detail -->
                    <div class="profile-detail-box">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3>Basic Note Details</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title *</label>
                                    <input type="email" name="title" class="form-control"
                                        id="exampleInputFirstName"
                                        aria-describedby="emailHelp"
                                        placeholder="Enter your notes title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Category
                                        *</label>
                                        <?php 
                                        $getcategoryquery = "SELECT * FROM notecategories WHERE IsActive = b'1'";
                                        $categoryquery = mysqli_query($conn, $getcategoryquery);
                                        $categoryrows = mysqli_num_rows($categoryquery);
                                        ?>
                                    <!-- <input class="form-control" placeholder="Select your category"> -->
                                    <select class="form-control" name="category"
                                        id="exampleFormControlSelect1"
                                       >
                                        <option selected hidden value="" onmouseover="this.style.background='red'" >Select your category</option>
                                         <?php 
                                        for($i=1;$i<=$categoryrows;$i++) {
                                            $categoryrow = mysqli_fetch_array($categoryquery);
                                        ?>
                                        <option value="<?php echo $categoryrow["ID"] ?>"><?php echo $categoryrow["Name"] ?></option>
                                        <?php 
                                        }
                                        ?>
                                        
                                    </select>
                              
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group profile-picture-input
                                    last-row">
                                    <label>Display Picture</label>
                                    <div class="custom-file">
                                        <input type="file" 
                                            class="custom-file-input"
                                            id="customFile" name="display-picture">
                                        <label class="custom-file-label"
                                            for="customFile">
                                            <div>
                                                <div class="upload-2"><img
                                                        src="images/User-Profile/upload.png"
                                                        alt=""></div>
                                                <div>upload
                                                    a picture</div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group profile-picture-input
                                    last-row">
                                    <label>Upload Notes *</label>
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input"
                                            id="customFile" name="notes-data[]">
                                        <label class="custom-file-label"
                                            for="customFile">
                                            <div>
                                                <div class="upload-2"><img
                                                        src="images/User-Profile/upload.png"
                                                        alt=""></div>
                                                <div>upload
                                                    a note</div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type</label>
                                    <?php 
                                        $getnotetypequery = "SELECT * FROM notetypes WHERE IsActive = b'1'";
                                        $notetypequery = mysqli_query($conn, $getnotetypequery);
                                        $notetyperows = mysqli_num_rows($notetypequery);
                                    ?>
                                    <select class="form-control" name="note-type"
                                        id="exampleFormControlSelect1"
                                        placeholder="Select your category">
                                        <option selected hidden value="">Select your note type</option>
                                        <?php 
                                        for($i=1;$i<=$notetyperows;$i++) {
                                            $notetyperow = mysqli_fetch_array($notetypequery);
                                        ?>
                                        <option value="<?php echo $notetyperow["ID"] ?>"><?php echo $notetyperow["Name"] ?></option>
                                        <?php 
                                        }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Number of
                                        Pages</label>
                                    <input type="text" name="number-of-pages" class="form-control"
                                        id="exampleInputFirstName"
                                        aria-describedby="emailHelp"
                                        placeholder="Enter number of note pages">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="">
                                    <div class="form-group">
                                        <label
                                            for="exampleFormControlTextarea1">Description
                                            *</label>
                                        <textarea class="form-control" name="description"
                                            id="exampleFormControlTextarea1"
                                            rows="5" placeholder="Enter your Description"></textarea>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="profile-detail-box">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3>Institute Information</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <?php 
                                        $getcountryquery = "SELECT * FROM countries WHERE IsActive = b'1'";
                                        $countryquery = mysqli_query($conn, $getcountryquery);
                                        $countryrows = mysqli_num_rows($countryquery);
                                    ?>
                                    <select class="form-control" name="country"
                                        id="exampleFormControlSelect1"
                                        placeholder="Select your category">
                                        <option selected hidden value="">Select your country</option>
                                         <?php 
                                        for($i=1;$i<=$countryrows;$i++) {
                                            $countryrow = mysqli_fetch_array($countryquery);
                                        ?>
                                        <option value="<?php echo $countryrow["ID"] ?>"><?php echo $countryrow["Name"] ?></option>
                                        <?php 
                                        }
                                        ?>
                                        
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Institute
                                        Name</label>
                                    <input type="email" name="institute-name" class="form-control"
                                        id="exampleInputFirstName"
                                        aria-describedby="emailHelp"
                                        placeholder="Enter your institute name">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="profile-detail-box">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3>Course Details</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Name</label>
                                    <input type="email" name="course-name" class="form-control"
                                        id="exampleInputFirstName"
                                        aria-describedby="emailHelp"
                                        placeholder="Enter your course name">
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Course Code</label>
                                    <input type="email" name="course-code" class="form-control"
                                        id="exampleInputFirstName"
                                        aria-describedby="emailHelp"
                                        placeholder="Enter your course code">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Professor /
                                        Lecturer</label>
                                    <input type="email" name="professor-name" class="form-control"
                                        id="exampleInputFirstName"
                                        aria-describedby="emailHelp"
                                        placeholder="Enter your professor name">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="profile-detail-box">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h3>Selling Information</h3>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label>Sell for *</label>
                                    <div class="input-group radio-input">
                                        <input type="radio" value="0"  checked="checked" name="sellingtype" class="checkmark">
                                        <label for="free">
                                            Free
                                        </label>
                                        <input type="radio" value="1" name="sellingtype">
                                        <label for="paid">
                                            Paid
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group price">
                                    <label>Sell Price *</label>
                                    <input type="text" name="sellprice" class="form-control"
                                        placeholder="Enter your price">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group profile-picture-input
                                    last-row">
                                    <label>Note Preview</label>

                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input"
                                            id="customFile" name="note-preview">
                                        <label class="custom-file-label"
                                            for="customFile"><div>
                                                <div class="upload-2"><img
                                                        src="images/User-Profile/upload.png"
                                                        alt=""></div><div>upload
                                                    a image</div></div></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <button class="btn-general btn-submit-form
                                mr-3" name="submit" <?php echo isset($_POST['submit']) ? 'disabled="true"' : ''; ?>>save</button>
                            <button class="btn-general btn-submit-form" name="publish" <?php if( $isflag == 0) { echo 'Disabled';} else {
                                                echo 'enabled';} ?>>publish</button>
                        </div>
                    </div>

                </div>

            </form>

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

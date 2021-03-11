<?php

session_start();

include 'dbconnect.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    echo "$id";
    
    $updatequery = "UPDATE users SET IsEmailVerified = 01 WHERE ID = '$id'";
    
    $query = mysqli_query($conn, $updatequery);
    
    if($query) {
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account updated successfully";
            header('location:3.1.1-Login.php');
        }else {
            $_SESSION['msg'] = "You are logged out.";
            header('location:3.1.1-Login.php');
        }
    }else {
        $_SESSION['msg'] = "Account not updated"; 
        header('location:3.1.1-Login.php'); 
    }
}
?>
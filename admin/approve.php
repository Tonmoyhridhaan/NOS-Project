<?php
   session_start();
   if($_SESSION['admin_login_status'] != "logged in" and !isset($_SESSION['email']) )
    header("Location:../index.php");
    include("../connection.php");
    $pid = $_GET['pid'];
    $query = "update cars set status = 1 where p_id = $pid";
    mysqli_query($con,$query);
    header("location: postapproval.php");
?>
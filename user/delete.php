<?php
   session_start();
   if($_SESSION['user_login_status']!="logged in" and ! isset($_SESSION['email']) )
    header("Location:../index.php");
    include '../connection.php';
    $pid = $_GET['pid'];
    $query = "delete from cars where p_id = $pid";
    mysqli_query($con,$query);
    header("location:myposts.php");
?>
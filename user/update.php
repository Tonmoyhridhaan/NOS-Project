<?php
   session_start();
   if($_SESSION['user_login_status']!="logged in" and ! isset($_SESSION['email']) )
    header("Location:../index.php");

    include("../connection.php");
    $rid = $_GET['rid'];
    $fg = $rid%10;
    $rid = $rid-$fg;
    $rid = $rid/10;

    if($fg == 1)
    {
        $query = "update request set status = 1 where rid = $rid";
        mysqli_query($con,$query);
        echo $rid;
        $query = "Select * from request where rid = $rid";
        $r = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($r);
        $pid = $row['pid'];
        $query = "update request set status = 4 where pid = $pid and status = 0"; 
        mysqli_query($con,$query);
        $query = "update cars set status = 2 where p_id = $pid";
        if(mysqli_query($con,$query)) echo "Success";

        $bid = $row['bid'];
        $sid = $row['sid'];
        $price = $row['price'];
        $query = "INSERT INTO `orders` (`pid`,`bid`,`sid`,`prices`)
        values($pid,$bid,$sid,$price)";
        if(mysqli_query($con,$query)) echo "Success";
        else "failed";
    }
    else if($fg == 2)
    {
        $query = "update request set status = 2 where rid = $rid";
        if(mysqli_query($con,$query)) echo "Success";
        else "failed";
    }
    else 
    {
        $query = "update request set status = 0 where rid = $rid";
        mysqli_query($con,$query);
        echo $rid;
        $query = "Select pid from request where rid = $rid";
        $r = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($r);
        $pid = $row['pid'];
        $query = "update request set status = 0 where pid = $pid and status = 4"; 
        mysqli_query($con,$query);
        $query = "update cars set status = 1 where p_id = $pid";
        mysqli_query($con,$query);
        $query = "delete from orders where pid = $pid";
        if(mysqli_query($con,$query)) echo "Success";
        else "failed";
    }
    header('location: recieved request.php');
?>
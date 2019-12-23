<?php
   session_start();
   if($_SESSION['admin_login_status'] != "logged in" and !isset($_SESSION['email']) )
    header("Location:../index.php");
?>

<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../style.css">
        <title>NOS | HOME</title>
</head>
    <!-- navbar  -->
<header>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <a class="navbar-brand" href="index.php">NOS</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
                
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                     <!-- <li class="nav-item">
                         <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                     </li> -->
                     <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home </span></a>
                    </li>
                    <li class="nav-item ">
                            <a class="nav-link" href="admin.php">Block member</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="ubmember.php">unblock member<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                            <a class="nav-link active" href="postapproval.php">Post requests<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="changepass.php">Change password<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                         <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                </ul>
                </div>
            </nav>
        </header>
    <!-- table  -->
    <main>
    <div class="table-responsive" id="sailorTableArea">
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">
    <?php
        include("../connection.php");   
        $query = "select * from cars where status = 0";
        $r = mysqli_query($con,$query);
            // echo $r['brand'];
            // echo $r['make'];
            // echo $r['loc'];
            // echo $r['type'];
            // echo $r['price'];
            // $r=mysqli_fetch_array($query);
        
        echo "<thead>
            <tr>
                <th>Brand</th>
                <th>Make</th>
                <th>Make Year</th>
                <th>location</th>
                <th>Type</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
           </tr>
            </thead>";
            echo "<tbody>";
            while($row = mysqli_fetch_array($r))
            {
                $brand = $row['brand'];
                $make = $row['make'];
                $loc = $row['loc'];
                $make_year = $row['make_year'];
                $type = $row['type'];
                $price = $row['price'];
                $image = $row['image'];
                $m_id = $row['m_id'];
                $pid = $row['p_id'];
                // $_SESSION['make'] = $make;
                // $_SESSION['loc'] = $loc;
                // $_SESSION['make_year'] = $make_year;
                // $_SESSION['type'] = $type;
                // $_SESSION['price'] = $price;
                // $_SESSION['image'] = $image;
                // $_SESSION['mobile'] = $mobile;
                // $_SESSION['pid'] = $pid;
                // $_SESSION['sid'] = $m_id;

                echo "<tr>
                    <td>$brand</td>
                    <td>$make</td>
                    <td>$loc</td>
                    <td>$make_year</td>
                    <td>$type</td>
                    <td>$price</td>
                    <td><img src='../uploadedimage/$image' height='100px' width='100px'></td>
                    <td><a href='approve.php?pid=$pid'>Approve </a></td>
                </tr>";
            }
            echo "</tbody>";
            echo "</table>";
        
    ?>
    </div>
        <script src="../vendor/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="../vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    </body>
</html>
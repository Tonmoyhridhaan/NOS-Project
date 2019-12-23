<?php
   session_start();
   if($_SESSION['user_login_status']!="logged in" and ! isset($_SESSION['email']) )
    header("Location:../index.php");
   
?>

<html lang="en">
<!doctype html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../style.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>NOS | HOME</title>
</head>
<body>
    <!-- navbar  -->
<header>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <a class="navbar-brand" href="index.php">NOS</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
                
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                         <a class="nav-link" href="index.php">Home </span></a>
                     </li>
                     <li class="nav-item">
                            <a class="nav-link" href="user.php">Post add</a>
                    </li> 
                    <li class="nav-item">
                            <a class="nav-link" href="buycar.php">Buy car</a>
                    </li> 
                    
                    <li class="nav-item">
                         <a class="nav-link " href="recieved request.php">Recieved Request</a>
                    </li>

                    <li class="nav-item">
                         <a class="nav-link " href="sent request.php">Sent Request</a>
                    </li>

                    <li class="nav-item">
                         <a class="nav-link" href="myposts.php">My posts</a>
                    </li>

                    <li class="nav-item active">
                         <a class="nav-link" href="mysells.php">My sells</a>
                    </li>

                    <li class="nav-item ">
                         <a class="nav-link" href="mybuys.php">My buys</a>
                    </li>

                    <li class="nav-item">
                         <a class="nav-link" href="changepass.php">Change password</a>
                    </li>
                    
                    <li class="nav-item">
                         <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                </ul>
                </div>
            </nav>
        </header>

    <div class="table-responsive" id="sailorTableArea">
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">
    <?php
        include("../connection.php");
        $id = $_SESSION['user_id'];
        $query = "select brand,type,mobile,name,prices,loc,image from cars,member,orders where orders.sid = $id and cars.p_id = orders.pid and member.id = orders.bid";
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
                <th>Car Type</th>
                <th>Sold from</th>
                <th>Buyer name</th>
                <th>Buying mobile</th>
                <th>Sellingegb price</th>
                <th>Image</th>
               </tr>
        </thead>";
        echo "<tbody>";
        while($row = mysqli_fetch_array($r))
         {
            $brand = $row['brand'];
            $type = $row['type'];
            $loc = $row['loc'];
            $name = $row['name'];
            $mobile = $row['mobile'];
            $price = $row['prices'];
            $image = $row['image'];
            
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
                <td>$type</td>
                <td>$loc</td>
                <td>$name</td>
                <td>$mobile</td>
                <td>$price</td>
                <td><img src='../uploadedimage/$image' height='100px' width='100px'></td>
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
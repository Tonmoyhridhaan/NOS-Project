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
                            <a class="nav-link " href="buycar.php">Buy car</a>
                    </li> 
                    
                    <li class="nav-item">
                         <a class="nav-link active" href="recieved request.php">Recieved Request</a>
                    </li>

                    <li class="nav-item">
                         <a class="nav-link " href="sent request.php">Sent Request</a>
                    </li>

                    <li class="nav-item">
                         <a class="nav-link" href="myposts.php">My posts</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="mysells.php">My sells</a>
                    </li>

                    <li class="nav-item">
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
     
        <!-- post table  -->
        <!-- Select box  -->
        <div class="table-responsive" id="sailorTableArea">
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">
    <?php
        include("../connection.php");
       
            $sid=$_SESSION['user_id'];
            $query = "select * from request where sid = $sid";
            $r = mysqli_query($con,$query);
            // echo $r['brand'];
            // echo $r['make'];
            // echo $r['loc'];
            // echo $r['type'];
            // echo $r['price'];
            // $r=mysqli_fetch_array($query);
            echo "<thead>
                <tr>
                    <th>Serial</th>
                    <th>Product Brand</th>
                    <th>Buyer Name</th>
                    <th>Buyer Email</th>
                    <th>location</th>
                    <th>Mobile</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action1</th>
                    <th>Action2</th>
                </tr>
            </thead>";
            echo "<tbody>";
            $i = 1;
            while($row = mysqli_fetch_array($r))
            {
                if($row['status'] == 2 || $row['status'] == 5) continue;
                $rid = $row['rid'];
                $bid = $row['bid'];
                $pid = $row['pid'];
                $price = $row['price'];

                $query2 = "select * from member,cars where member.id = $bid and cars.p_id = $pid";
                $r2 = mysqli_query($con,$query2);
                $row2 = mysqli_fetch_array($r2);

                $brand = $row2['brand'];
                $bname = $row2['name'];
                $bemail = $row2['email'];
                $bloc = $row2['loc'];
                $mobile = $row2['mobile'];
                $image = $row2['image'];
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
                    <td>$i</td>
                    <td>$brand</td>
                    <td>$bname</td>
                    <td>$bemail</td>
                    <td>$bloc</td>
                    <td>$mobile</td>
                    <td>$price</td>
                    <td><img src='../uploadedimage/$image' height='100px' width='100px'></td>";
                    if($row['status'] == 0) 
                    {
                        $rid = ($rid*10)+1;
                        echo "<td><a href='update.php?rid=$rid'</a> Confirm</td>";
                        $rid = $rid+1;
                        echo "<td><a href='update.php?rid=$rid'</a>Reject</td>";
                    }
                    else if($row['status'] == 1)
                    {
                        $rid = ($rid*10)+3;
                        echo "<td><p style='color: green;'>Confirmed</p></td>";
                        echo "<td><a href='update.php?rid=$rid'</a>Cancel</td>";
                    }
                    else if($row['status'] == 4)
                    {
                        echo "<td><p style='color: yellow;'>sold</p></td>";
                        echo "<td><p style='color: yellow;'>sold</p></td>";
                    }
                    
                echo"</tr>";
                $i=$i+1;
                
                
            }
            echo "</tbody>";
            echo "</table>";
            
        
    ?>
        <script src="../vendor/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="../vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    </body>
</html>
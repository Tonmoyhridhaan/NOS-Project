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
                         <a class="nav-link" href="buycar.php">Go back </span></a>
                     </li>
                     
                </ul>
                </div>
            </nav>
        </header>
     
        <!-- post table  -->
        
    <div class="table-responsive" id="sailorTableArea">
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">
    <?php
        include("../connection.php");
        $pid = $_GET['pid'];
        $query = "SELECT * FROM cars WHERE p_id = $pid";
        $r = mysqli_query($con,$query);
        $row = mysqli_fetch_array($r);
        $mid = $row['m_id'];
        $make = $row['make'] ;
        $loc = $row['loc'] ;
        $make_year = $row['make_year'];
        $type = $row['type'];
        $price = $row['price'];
        $image = $row['image'];

        $query = "SELECT mobile FROM member WHERE id = $mid";
        $r = mysqli_query($con,$query);
        $row = mysqli_fetch_array($r);
        $mobile = $row['mobile'];

        echo "<tbody>";
        echo "<tr><td colspan='2'><img src='../uploadedimage/$image' height='450px' width='500px' align='center'></td></tr>";
        echo "<tr><td colspan='2'><h2>Description</h2></td></tr>";
            echo "<tr>
            <td>Make country</td>
            <td>$make</td>
            </tr>";
            echo "<tr>
            <td>Make year</td>
            <td>$make_year</td>
            </tr>";
            echo "<tr>
            <td>Location</td>
            <td>$loc</td>
            </tr>";
            echo "<tr>
            <td>Car Type</td>
            <td>$type</td>
            </tr>";
            echo "<tr>
            <td>Car price</td>
            <td>$price</td>
            </tr>";
            echo "<tr>
            <td>Seller Mobile</td>
            <td>$mobile</td>
            </tr>";
            
            echo "</tbody>";
            echo "</table>";
        
    ?>
    </div>
    <!-- login  -->
    <main>
            <div class="login-area mt-5">
                <div class="container">
                    <div class="rowL">
                        <div class="col-md-6 offset-md-3">
                            <form class="bg-white py-5 px-3" method='post' action=''>

                                <div class="form-group">
                                    <label for="price">Enter your price</label>
                                    <input type="price" class="form-control" id="price" name='price' aria-describedby="emailHelp" placeholder="Amount in taka">
                                </div>
                                <button type="submit" name='req' class="btn btn-dark mt-3">Send Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
            include '../connection.php';
            if(isset($_POST['req']))
            {
                $price = $_POST['price'];
                $bid = $_SESSION['user_id'];
                $pid = $_SESSION['pid'];
                $sid = $_SESSION['sid'];
                $query = "INSERT INTO `request` (`bid`,`sid`,`pid`,`price`,`status`)
                values($bid,$sid,$pid,$price,0)";
                
                if(mysqli_query($con, $query))
                {
                   echo "Request Send";
                }
                else
                {
                     echo "Something went wrong";
                }
                
            }
            
        ?>

        <script src="../vendor/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="../vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    </body>


</html>
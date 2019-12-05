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
                            <a class="nav-link active" href="buycar.php">Buy car</a>
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
        <main>
            <div class="login-area mt-5">
                <div class="container">
                    <div class="rowL">
                        <div class="col-md-6 offset-md-3">
                            <form method='post'  enctype="multipart/form-data" class="bg-white py-5 px-3">

                            <div class="form-group">
                            <label for="brand">Brand</label>
                                <select name="brand" class="form-control" id="brand" type="text">
                                    <option selected value="">Select Brand</option>
                                    <?php
                                        include("../connection.php");
                                        $sql="select distinct brand from cars";
                                        $r=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_array($r))
                                        {
                                            $brand=$row['brand'];
                                            echo "<option value='$brand'>$brand</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block mt-3" value="go" name="go">Search Car</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <div class="table-responsive" id="sailorTableArea">
    <table id="sailorTable" class="table table-striped table-bordered" width="100%">
    <?php
        include("../connection.php");
        if(isset($_POST['go']))
        {
            $brand=$_POST['brand'];
            $query = "select * from cars where brand = '$brand'";
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
                $make = $row['make'];
                $loc = $row['loc'];
                $make_year = $row['make_year'];
                $type = $row['type'];
                $price = $row['price'];
                $image = $row['image'];
                
                echo "<tr>
                
                    <td>$brand</td>
                    <td>$make</td>
                    <td>$loc</td>
                    <td>$make_year</td>
                    <td>$type</td>
                    <td>$price</td>
                    <td><img src='../uploadedimage/$image' height='100px' width='100px'></td>
                    <td><a  >View post</a></td>
                    
                </tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
    ?>
    </div>
        <script src="../vendor/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="../vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    </body>
</html>
<?php
   session_start();
   
   if($_SESSION['user_login_status']!="logged in" and ! isset($_SESSION['email']) )
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
                     <li class="nav-item">
                         <a class="nav-link" href="index.php">Home </span></a>
                     </li>
                     <li class="nav-item">
                            <a class="nav-link active" href="user.php">Post add</a>
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
     <body>
        <!-- post car  -->
        <main>
            <div class="login-area mt-5">
                <div class="container">
                    <div class="rowL">
                        <div class="col-md-6 offset-md-3">
                            <form method='post' action="user.php" enctype="multipart/form-data" class="bg-white py-5 px-3">

                            <div class="form-group">
                            <label for="brand">Brand</label>
                                <select name="brand" class="form-control" id="brand" type="text">
                                    <option selected>Select Brand</option>
                                    <option value = "Aston Martin">Aston Martin</option>
                                    <option value = "Bently">Bently</option>
                                    <option value = "BMW">BMW</option>
                                    <option value = "Ferrari">Ferrari</option>
                                    <option value = "Ford">Ford</option>
                                    <option value = "Hyundai">Hyundai</option>
                                    <option value = "Lamborghini">Lamborghini</option>
                                    <option value = "Mercedes">Mercedes</option>
                                    <option value = "Mitshubishi">Mitshubishi</option>
                                    <option value = "Nissan">Nissan</option>
                                    <option value = "Toyota">Toyota</option>
                                    <option value = "Other">Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                            <label for="make">Make</label>
                                <select name="make" class="form-control" id="make" type="text">
                                    <option selected>Select Make</option>
                                    <option>America</option>
                                    <option>Euorope</option>
                                    <option>Asia</option>
                                </select>
                            </div>

                            <div class="form-group">
                                    <label for="loc">Location</label>
                                    <input type="text" name="loc" class="form-control" id="loc" placeholder="location">
                            </div>

                            <div class="form-group">
                            <label for="year">Year</label>
                                <select name="year" class="form-control" id="year" type="text">
                                    <option selected>Select Year</option>
                                    <option>2019<option>
                                    <option>2018<option>
                                    <option>2017<option>
                                    <option>2016<option>
                                    <option>2015<option>
                                    <option>2014<option>
                                    <option>2013<option>
                                    <option>2012<option>
                                    <option>2011<option>
                                    <option>2010<option>
                                    <option>2009<option>
                                    <option>2008<option>
                                    <option>2007<option>
                                    <option>2006<option>
                                    <option>2005<option>
                                    <option>2004<option>
                                    <option>2003<option>
                                    <option>2002<option>
                                    <option>2001<option>
                                    <option>2000<option>
                                    <option>1999<option>
                                    <option>1998<option>
                                    <option>1997<option>
                                    <option>1996<option>
                                    <option>1995<option>
                                    <option>1994<option>
                                    <option>1993<option>
                                    <option>1992<option>
                                    <option>1991<option>
                                    <option>1990<option>
                                    <option>1989<option>
                                    <option>1988<option>
                                    <option>1987<option>
                                    <option>1986<option>
                                    <option>1985<option>
                                    <option>1984<option>
                                    <option>1983<option>
                                    <option>1982<option>
                                    <option>1981<option>
                                    <option>1980<option>
                                    <option>1979<option>
                                    <option>1978<option>
                                    <option>1977<option>
                                    <option>1976<option>
                                    <option>1975<option>
                                    <option>1974<option>
                                    <option>1973<option>
                                    <option>1972<option>
                                    <option>1971<option>
                                    <option>1970<option>
                                    <option>1969<option>
                                    <option>1968<option>
                                    <option>1967<option>
                                    <option>1966<option>
                                    <option>1965<option>
                                    <option>1964<option>
                                    <option>1963<option>
                                    <option>1962<option>
                                    <option>1961<option>
                                    <option>1960<option>
                                    <option>1959<option>
                                    <option>1958<option>
                                    <option>1957<option>
                                    <option>1956<option>
                                    <option>1955<option>
                                    <option>1954<option>
                                    <option>1953<option>
                                    <option>1952<option>
                                    <option>1951<option>
                                    <option>1950<option>
                                </select>
                            </div>

                            <div class="form-group">
                            <label for="type">Type</label>
                                <select name="type" class="form-control" id="type" type="text">
                                    <option selected>Select Type of Car</option>
                                    <option>4X4</option>
                                    <option>Off Road</option>
                                    <option>On Road</option>
                                    <option>Luxury</option>
                                    <option>Cadilac</option>
                                    <option>Vintage</option>
                                </select>
                            </div>
                            <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" class="form-control" id="price" placeholder="price">
                            </div>

                            <div class="form-group">
                                    <label for="image">Add image</label>
                            <div>
                            <div class="form-group">
                                    <input type="file" id="image" name="image">
                            </div>
                                <button type="submit" class="btn btn-dark btn-block mt-3" value = "submit" name = "submit">Add Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
        <script src="../vendor/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="../vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>


</html>

<?php
    include '../connection.php';
    // if($con)
    //  {
    //    echo "connected";
    //  }
    //  else{
    //   echo "not connected";
    //  }


if(isset($_POST['submit']))
{
	$brand = $_POST['brand'];
	$make = $_POST['make'];
    $loc = $_POST['loc'];
	$year = $_POST['year'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $mid = $_SESSION['user_id'];
    //image upload code
	  $ext= explode(".",$_FILES['image']['name']);
      $c=count($ext);
      $ext=$ext[$c-1];
      $date=date("D:M:Y");
      $time=date("h:i:s");
      $image_name=md5($date.$time);
      $image=$image_name.".".$ext;
     
    $query = "INSERT INTO `cars` (`m_id`,`brand`,`make`,`loc`,`make_year`,`type`,`price`,`image`)
            values($mid,'$brand','$make','$loc',$year,'$type','$price','$image')";
     if(mysqli_query($con,$query))
     {
         echo "Successfully inserted!";
         if($image !=null){
                     move_uploaded_file($_FILES['image']['tmp_name'],"../uploadedimage/$image");
                     }
        
     }
     else
     {
         echo "error!".mysqli_error($con);
     }
    // $_SESSION['name'] = $name;
    // $_SESSION['email'] = $email;
    // $_SESSION['mobile'] = $mobile;
    // $_SESSION['loc'] = $loc;
    // $_SESSION['gender'] = $gender;
    // $_SESSION['dob'] = $dob;
    // $_SESSION['success'] = "congrats";
   
    }
?>
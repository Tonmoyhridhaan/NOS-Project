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

                    <li class="nav-item active">
                         <a class="nav-link" href="changepass.php">Change password</a>
                    </li>

                    <li class="nav-item">
                         <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="login-area mt-5">
                <div class="container">
                    <div class="rowL">
                        <div class="col-md-6 offset-md-3">
                            <form class="bg-white py-5 px-3" method='post' action=''>

                                <div class="form-group">
                                    <label for="cp">Old password</label>
                                    <input type="password" class="form-control" id="cp" name='cp' aria-describedby="emailHelp" placeholder="Enter old password">
                                </div>

                                <div class="form-group">
                                    <label for="np1">New Password</label>
                                    <input type="password" class="form-control" id="np1" name='np1' placeholder="Enter new Password">
                                </div>

                                <div class="form-group">
                                    <label for="np2">Confirm Password</label>
                                    <input type="password" class="form-control" id="np2" name='np2' placeholder="Password">
                                </div>

                                <button type="submit" name='chp' class="btn btn-dark mt-3">Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php
            include '../connection.php';
            if(isset($_POST['chp']))
            {
                $cp = $_POST['cp'];
                $np1 = $_POST['np1'];
                $np2 = $_POST['np2'];
                $id = $_SESSION['user_id'];
                $query = "select password from member where id = $id";
                $r = mysqli_query($con,$query);
                $row = mysqli_fetch_assoc($r);
                $pass = $row['password'];
               //echo $pass;
               

                if($cp != $pass)
                {
                    echo "<p style='color: red;'>Incorrect Current Password";
                }
                else
                {
                    if($np1 != $np2) echo "<p style='color: red;'>New password doesn't matched";
                    else
                    {
                        $query = "update member set password = '$np1' where id = $id";
                        mysqli_query($con,$query);
                        echo "<p style='color: green;'> Password Sueccesfully changed";
                        
                    }
                }
            }
          ?>  
          <br></br>
          <div>
            <footer class="bg-dark py-3">
                 <p class="m-0 text-center text-white">&copy; Copyright reserved by NOS corporation. And Designed by <a href="#">Tonmoy Barua</a></p>
            </footer>
        </div>
        <script src="../vendor/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="../vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    </body>
</html>

<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="vendor/bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>NOS | HOME</title>
    </head>
    <body class="bg-light">
    <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
                <a class="navbar-brand" href="index.php">NOS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">SignUP</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- login  -->
        <main>
            <div class="login-area mt-5">
                <div class="container">
                    <div class="rowL">
                        <div class="col-md-6 offset-md-3">
                            <form class="bg-white py-5 px-3" method='post' action=''>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name='email' aria-describedby="emailHelp" placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name='password' placeholder="Password">
                                </div>

                                <div class="form-check">
                                    <a href="signup.php">Sign up? </a>
                                </div>
                                <button type="submit" name='login' class="btn btn-dark mt-3">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

         <div>
            <footer class="bg-dark py-3">
                 <p class="m-0 text-center text-white">&copy; Copyright reserved by NOS corporation. And Designed by <a href="#">Tonmoy Barua</a></p>
            </footer>
        </div>

        <?php
            include 'connection.php';
            if(isset($_POST['login']))
            {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $query1 = "SELECT * FROM member WHERE email = '$email' AND password = '$password'";
                $query2 = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
                $result1 = mysqli_query($con, $query1);
                $row1 = mysqli_fetch_array($result1);
                $result2 = mysqli_query($con, $query2);
                $row2 = mysqli_fetch_array($result2);
                if(mysqli_num_rows($result1) == 1)
                {
                   
                    $_SESSION['email'] = $email;
                    $_SESSION['user_login_status'] = "logged in";
                    $_SESSION['user_id'] = $row1['id'];
                    header("location: user/index.php");
                }
                else if(mysqli_num_rows($result2) == 1)
                {
               
                    $_SESSION['email'] = $email;
                    $_SESSION['admin_login_status'] = "logged in";
                    header("location: admin/index.php");
                }
                else
                {
                     echo "<p style='color: red;'>Incorrect UserId or Password</p>";
                }
                
            }
            
        ?>

        <script src="vendor/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>


    </body>
    
</html>

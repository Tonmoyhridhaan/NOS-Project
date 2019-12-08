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
        <!-- navbar -->
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
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="signup.php">SignUP</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- sign up  -->
        <main>
            <div class="login-area mt-5">
                <div class="container">
                    <div class="rowL">
                        <div class="col-md-6 offset-md-3">
                            <form method='post' action="signup.php" class="bg-white py-5 px-3">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    <label for="mobile">Number</label>
                                    <input type="text" name="mobile" class="form-control" id="mobile" aria-describedby="mobileHelp" placeholder="Enter mobile">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name = "password" class="form-control" id="password" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="c-password">Confirm Password</label>
                                    <input type="password" name = "cpassowrd" class="form-control" id="password" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="loc">Location</label>
                                    <input type="text" name="loc" class="form-control" id="loc" placeholder="location">
                                </div>

                                <div class="form-group">
                                    <label for="">Date of birth</label>
                                    <input type="date" name="dob" class="form-control" id="dob" placeholder="date of birth">
                                </div>

                                <div class="form-group">
                                    <label for="Gender">Gender</label>
                                    <select name="gender" class="form-control" id="Gender" type="text">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-dark btn-block mt-3" value = "Signup" name = "signup">SignUP</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- footer  -->
        <footer class="bg-dark py-3">
            <p class="m-0 text-center text-white">&copy; Copyright reserved by NOS corporation. And Designed by <a href="#">Tonmoy Barua</a></p>
        </footer>

        <script src="vendor/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    </body>
</html>

<?php
include 'connection.php';

if(isset($_POST['signup']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
    $mobile = $_POST['mobile'];
	$loc = $_POST['loc'];
	$gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $query = "INSERT INTO `member` (`name`,`email`,`mobile`,`location`,`gender`,`birthdate`,`password`)
            values('$name','$email','$mobile','$loc','$gender','$dob','$password')";
     mysqli_query($con, $query);
    // $_SESSION['name'] = $name;
    // $_SESSION['email'] = $email;
    // $_SESSION['mobile'] = $mobile;po
    // $_SESSION['loc'] = $loc;
    // $_SESSION['gender'] = $gender;
    // $_SESSION['dob'] = $dob;
    // $_SESSION['success'] = "congrats";
    header('location: index.php');
}
?>
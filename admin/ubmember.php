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
                    <li class="nav-item active">
                            <a class="nav-link" href="ubmember.php">unblock member<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link " href="postapproval.php">Post requests<span class="sr-only">(current)</span></a>
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
        <!-- block member -->
     <body>
        <main>
            <div class="login-area mt-5">
                <div class="container">
                    <div class="rowL">
                        <div class="col-md-6 offset-md-3">
                            <form method='post'  action = 'ubmember.php' class="bg-white py-5 px-3">

                            <div class="form-group">
                            <label for="member">Choose a member email to unblock</label>
                                <select name="email" class="form-control" id="member" type="text">
                                    <option selected value="">Select email</option>
                                    <?php
                                        include("../connection.php");
                                        $sql="select email from member where status = 1";
                                        $r=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_array($r))
                                        {
                                            $email=$row['email'];
                                            echo "<option value='$email'>$email</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block mt-3" value="go" name="go">Unblock member</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php
        include("../connection.php");
        if(isset($_POST['go']))
        {
            $email=$_POST['email'];
            $query = "update member set status = 0 where email = '$email'";
            if(mysqli_query($con,$query)) echo "Succesfully addded member $email"; 
            $query = "select * from member where email = '$email'";
            $r =  mysqli_query($con,$query);
            $row = mysqli_fetch_array($r);
            $id = $row['id'];
            $query = "select * from cars where m_id = $id";
            $r =  mysqli_query($con,$query);
            $row = mysqli_fetch_array($r);
            $status = $row['status'];
            if($status == 5)
            {
                $query = "update cars set status = 0 where m_id = $id";
                mysqli_query($con,$query);
            }
            else
            {
                $query = "update cars set status = 1 where m_id = $id";
                mysqli_query($con,$query);
            }
            $query = "select * from request where bid = $id";
            $r =  mysqli_query($con,$query);
            $row = mysqli_fetch_array($r);
            $status = $row['status'];
            if($status == 5)
            {
                $query = "update request set status = 0 where bid = $id";
                mysqli_query($con,$query);
            }

        }
        ?>

    </body>
        <script src="../vendor/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="../vendor/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>


</html>


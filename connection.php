<?php

     $con = mysqli_connect("localhost","root","","nos");


    //  if($con)
    //  {
    //    echo "connected";
    //  }
    //  else{
    //   echo "not connected";
    //  }
    
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>
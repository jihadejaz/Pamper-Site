<?php
session_start();
 $con = mysqli_connect("localhost","root","","pampersite");
 if (mysqli_connect_errno()){
   echo "Failed to connect to the database: " . mysqli_connect_error();
   }else{
    //success
    }
 ?>
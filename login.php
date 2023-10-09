<?php session_start(); ?>
<!doctype html>
<html lang="eng">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <style>
    body {
      background-color: #e9eef2;
    }

    .col-sm-12 {
      /* background-image: linear-gradient(to right, cyan, blue); */
      border-radius: 0px;
    }

    .form-control {
      border-radius: 10px;
      /* background-image: linear-gradient(to right, cyan, white); */
      /* font-style: italic; */
      /* border: blue; */

    }

    .items:hover {
      background-color: indigo;
      border-radius: 5px;
    }

    @media screen and (max-width:767px) {

      /* .links{
            
        } */
      .items {
        margin-left: -45px;
        /* background-color:blue ; */
      }



      .btncontainer {
        padding: 0px;

      }

      #or {
        font-size: 20px;
      }



    }
  </style>

  <nav class="navbar navbar-expand-md navbar-dark header fixed-top" style="background: #000000;">
    <a class="navbar-brand" style="font-weight: 200;" href="index.php">Glamify Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-5 links" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white items" style="font-weight: 200;" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white items" style="font-weight: 200;" href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white items" style="font-weight: 200;" href="#">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white items" style="font-weight: 200;" href="login.php">Login</a>
        </li>




      </ul>
    </div>
  </nav>

  <div class="container  mt-5">


    <div class="row mt-0 ">
      <!-- <div><a href="home.php" class="text-dark btn">Home/</a></div>
      <div><a href="login.php" class="text-dark btn">Login</a></div> -->


      <div class="col-md-12 mt-5 p-5 shadow-lg">
        <form action="login.php" method="post" enctype="multipart/form-data">


          <div class="form-group">
            <!-- <label for="em">:</label> -->
            <input type="email" name="em" id="name" placeholder="Email" class="form-control">

          </div>

          <div class="form-group">
            <!-- <label for="ps">:</label> -->
            <input type="password" name="pswd" id="ps" placeholder="Password" class="form-control">

          </div>
          <div class="container btncontainer d-flex">
            <button class=" text-white loginbtn" name="savedata" style="background-color: indigo; padding: 10px 20px; border:0px;">Login </button>
            <h1 id='or' style='font-weight: 300; font-size: 25px;' class='mt-2'><span id='or' style='font-weight: 500; padding:5px;'>OR</span><a href="registration.php" style='color:black;'>Register Now</a></h1>

          </div>
        </form>

      </div>
    </div>
  </div>

  <div class="text-center">
    <p>Not a member? <a href="/register">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f" style="color: black"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1" style="color: black">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-1" style="color: black">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="submit" class="btn btn-link btn-floating mx-1" style="color: black">
      <i class="fab fa-github"></i>
    </button>
  </div>

  <div class="container-fluid" id='footer' style='background-color: #e9eef2;'>
    <div class="row  p-sm-5">
      <div class="col-md-6 " style='gap: 50px; background-color: #e9eef2;'>
        <div class="container p-0">
          <ul>

            <hr>
            <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight: 300; font-size:20px; color: black;'>Our Address</a></li><br>
            <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight: 300; font-size:20px; color: black;'>Warranty Claims</a></li><br>
            <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight: 300; font-size:20px; color: black;'>FAQs</a></li><br>
            <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight: 300; font-size:20px; color: black;'>About us</a></li><br>

            <div class="container d-flex p-0" style='gap: 20px;'>
              <h6 style='color: black; font-weight: 400; font-size:20px;'>
                Follow Us
              </h6>


              <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight:300; font-size:20px;  color: black;'><i class='fa fa-whatsapp'></i> </a></li>
              <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight:300; font-size:20px;  color: black;'><i class='fa fa-facebook'></i> </a></li>
              <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight:300; font-size:20px;  color: black;'><i class='fa fa-instagram'></i> </a></li>
              <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight:300; font-size:20px;  color: black;'><i class='fa fa-twitter'></i> </a></li>
            </div>

          </ul>
        </div>
      </div>



      <div class="col-md-6 " style='background-color: #e9eef2;'>
        <div class="container p-0 ">
          <hr>

          <ul>
            <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight: 300; font-size:20px; color: black;'>Our Shop</a></li> <br>
            <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight: 300; font-size:20px; color: black;'>Sponsers</a></li> <br>
            <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight: 300; font-size:20px; color: black;'>Clients</a></li> <br>
            <li style=' list-style:none;'><a href="#" class='' style='text-decoration: none; font-weight: 300; font-size:20px; color: black;'>Privacy Policy</a></li> <br>
            <!-- <li style=' list-style:none;'><a href="" class='' style='text-decoration: none;  color: white;'>Hello</a></li> <br> -->
          </ul>
        </div>
      </div>
    </div>

  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php
include 'connection.php';

if (isset($_REQUEST['savedata'])) {

  $email = $_REQUEST['em'];
  $password = $_REQUEST['pswd'];

  // $email1 = "select from `loggedusers` where `email` = '$email'";
  // $password1 = "select from `loggedusers` where `upassword` = '$password'";


  $query = "SELECT * FROM `loggedusers` WHERE `email` = '$email' AND `upassword` = '$password'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);

  if (isset($row['email']) == $email && (isset($row['upassword'])) == $password) {



    if ($row['Role'] == "Admin") {
      $_SESSION['emailz'] = $row['email'];
      echo "<script>
      window.location.href='adminindex.php';
      </script>";
    } else if (isset($row['email']) == "User") {
      $_SESSION['useremail'] = $_REQUEST['em'];
      $_SESSION['username'] = $row['user_name'];


      echo "<script>
      window.location.href='userindex.php';
      </script>";
    }
  } else {
    echo "<script>
    alert('Username Password incorrect or User does not exist');
    window.location.href='login.php';
    </script>";
  }



  if (isset($_REQUEST['savedata'])) {
    $email = $_REQUEST['em'];
    $password = $_REQUEST['pswd'];

    $checkquery = "SELECT * FROM `loggedusers` WHERE email = '$email' and upassword = '$password'";

    $check = mysqli_query($conn, $checkquery);
    mysqli_close($conn);
  }
}



?>
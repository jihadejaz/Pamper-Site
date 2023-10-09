<?php
include 'connection.php';
?>
<!doctype html>
<html lang="eng">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #e9eef2;
        }

        .col-sm-12 {
            /* background-image: linear-gradient(to right, cyan, blue); */
            border-radius: 0px;
        }

        .form-control {
            border-radius: 1px;
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

            .items:hover {
                background-color: blue;
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
    <hr class='mt-2'>
    <div class="container p-0 mt-5">
        <div class="row mt-0">

            <div class="col-sm-12 mt-3 p-5 shadow-lg bg-white">
                <form action="registration.php" method="post">


                    <div class="form-group">
                        <!-- <label for="em">Your Email:</label> -->
                        <input type="email" name="email" id="name" placeholder="Your Email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <!-- <label for="em">Your Email:</label> -->
                        <input type="name" name="uname" id="name" placeholder="Your Name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <!-- <label for="ps"> :</label> -->
                        <input type="password" name="pswd" id="ps" placeholder="Your Password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <!-- <label for="ps"> :</label> -->
                        <input type="number" name="con" id="ps" placeholder="Your Contact" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <!-- <label for="ps">Your :</label> -->
                        <input type="text" name="add" id="ps" placeholder="Your Address" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <!-- <label for="ps">Your :</label> -->
                        <input type="date" name="dateofbirth" id="ps" placeholder=" " class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="ps">Male</label>
                        <input type="radio" name="gender" value='Male' id="ps" placeholder="" class=""> <br>
                        <label for="ps">Female</label>

                        <input type="radio" name="gender" id="ps" value='Female' placeholder="" class="">

                    </div>

                    <div class="container">
                        <button class=" text-white loginbtn" name="savedata" style="background-color: indigo; padding: 10px 20px; border:0px;">Resgister</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php

    if (isset($_REQUEST['savedata'])) {

        $email = $_REQUEST['email'];
        $name = $_REQUEST['uname'];
        $password = $_REQUEST['pswd'];
        $contact = $_REQUEST['con'];
        $address = $_REQUEST['add'];
        $gender = $_REQUEST['gender'];
        $dob = $_REQUEST['dateofbirth'];



        $query = mysqli_query($conn, "SELECT * FROM `loggedusers` WHERE email = '$email'");



        if (mysqli_num_rows($query) > 0) {
            echo "<script>
            alert('User Already exist');
            </script>";
        } else if (isset($_REQUEST['savedata'])) {
            $email = $_REQUEST['email'];
            $name = $_REQUEST['uname'];

            $password = $_REQUEST['pswd'];
            $contact = $_REQUEST['con'];
            $address = $_REQUEST['add'];
            $gender = $_REQUEST['gender'];
            $role = "User";

            $query = "INSERT INTO `loggedusers` (`email`,`upassword`,`contact`,`address`,`gender`,`Role`,`user_name`,`dob`) VALUES ('$email','$password','$contact','$address','$gender','$role','$name','$dob')";

            $result = mysqli_query($conn, $query);

            if (!empty($result)) {
                echo "<script>
                alert('Account has been created Congratulations!');
                window.location.href='login.php';
                </script>";
            } else {
                echo '<script>
                alert("Error creating account");
                </script>';
            }
        }
    }




    ?>



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
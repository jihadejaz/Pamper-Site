<?php
session_start();
if (!isset($_SESSION['useremail'])) {

    echo "<script>
        window.location.href='login.php';
        </script>";
} else { ?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Userindex</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <style>
        body {
            background-color: #e9eef2;

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
                cursor: progress;
                background-color: black;
            }

            .items:hover {
                background-color: indigo;

            }

            #items {
                margin-left: -45px;
                /* background: yellow; */
            }

            #data {
                font-size: 15px;
            }

            #propic {
                width: 100px;
            }


        }

        #data {
            font-weight: 300;
        }
    </style>

    <body>

        <nav class="navbar navbar-expand-md navbar-dark header" style="background: #000000;">
            <a class="navbar-brand" style="font-weight: 200;" href="index.php">Glamify Store</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-5 links" style="font-weight: 200;" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200;" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200;" href="contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200; " href="addblog.php">Edit blogs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" id="items" style="font-weight: 200; background-color: red; " href="logout.php"><i class='fa fa-power-off'></i> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="items" style="font-weight: 200; background-color: indigo;" href="userindex.php">
                            My Account
                            </i>
                        </a>
                    </li>

                    <?php



                    include 'connection.php';
                    $query = "select * from `loggedusers`";
                    $result = mysqli_query($conn, $query);
                    // $_SESSION['useremail'];
                    $row = mysqli_fetch_assoc($result);
                    // $id = $row['id'];

                    {
                    ?>


                        <li class="nav-item">
                            <a class="nav-link text-white" id="items" style="font-weight: 200; background-color: indigo; " href="pamperscart.php?cartdata=<?php echo $_SESSION['useremail']; ?>">Cart <i class='fa fa-shopping-cart'></i></a>
                        </li> <?php } ?>

                </ul>
            </div>
        </nav>

        <!-- <div class="container-fluid shadow-lg">
            <div class="row">
                <div class="col-md-12">
                    <img src="images/banner.jpg" class='img-fluid'>

                </div>
            </div>
        </div> -->



        <div class="container-fluid" style='height:20vh; background:black;'></div>

        <div class="container-fluid text-center">
            <?php
            include 'connection.php';
            $username = $_SESSION['useremail'];
            $query = "select * from `loggedusers` where `email` = '$username'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="container text-center">
                <a href="" type='button' data-toggle="modal" data-target='#myModal'><img src="<?php echo $row['profileimage']; ?>" width="190" alt="" class='img-fluid' id='propic' style='border-radius:50px; border:black 0px solid; position:relative; top:-65px;' id='profilepic'></a>

                <!-- <input type="file"> -->
            </div>
            <div class="row">
                <div class="col">
                    <h5 id='data' style='font-weight:600;'>Username</h5>
                    <h4 id='data'><?php echo $row['user_name']; ?></h4>
                    <hr>

                </div>
                <div class="col ">
                    <h5 id='data' style='font-weight:600;'>Email</h5>
                    <h4 id='data'><?php echo $_SESSION['useremail']; ?></h4>
                    <hr>
                </div>

                <div class="col">
                    <h5 id='data' style='font-weight:600;'>DOB</h5>
                    <h4 id='data'><?php echo $row['dob']; ?></h4>
                    <hr>


                </div>
            </div>
            <?php ?>
        </div>
        </div>

        <?php

        include 'connection.php';

        if (isset($_POST['uploadimg'])) {
            $files = $_FILES['pimage'];

            $filename = $files['name'];
            $fileerror = $files['error'];
            $filetmp = $files['tmp_name'];

            if ($filename == '') {
                echo 'please file select';
            } else {
                $fileext = explode('.', $filename);
                $filecheck = strtolower(end($fileext));

                $fileextstored = array('png', 'jpg', 'jpeg', 'gif', 'webp');

                if (in_array($filecheck, $fileextstored)) {

                    $destnationfile = 'images/' . $filename;
                    move_uploaded_file($filetmp, $destnationfile) or die("query Error");
                    echo 'image uploaded';
                    echo "<script>;
                    window.location.href='babyproducts.php';
                    </script>";


                    $sql = "INSERT INTO `loggedusers` (`profileimage`) VALUES ('$destnationfile')";
                    // echo $sql;
                    $query = mysqli_query($conn, $sql);
                    mysqli_close($conn);



                    if ($query) {
                        echo 'insert success';
                    }
                } else {
                    echo 'invalid file ';
                }
            }
        }
        ?>











        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content border-0">

                    <div class="modal-content">
                        <div class="container p-0">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="image">Upload Profile Picture</label>
                                    <input type="file" name='pimage' class='form-control border-0'>
                                </div>

                                <button type='submit' name='uploadimg' class='btn btn-primary'>Upload</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="container-fluid p-sm-" id='footer' style='background-color: #e9eef2;'>
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

























        <!-- <div class="container-fluid" id='footer' style='background-color: #e9eef2;'>
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
        <!-- </ul>
                    </div>
                </div>
            </div>

        </div> -->



        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </body>

    </html>
<?php } ?>
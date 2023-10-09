<?php

error_reporting(0);
session_start();
if (!isset($_SESSION['useremail'])) {
    // ini_set('error_reporting', 0);
} else { ?>


    <!doctype html>
    <html lang="en">

    <head>
        <title>My Cart</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



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
            }



            .btncontainer {
                padding: 0px;

            }

            #or {
                font-size: 20px;
            }
        }
    </style>

    <body>

        <nav class="navbar navbar-expand-md navbar-dark header" style="background-color: #000000 ;">
            <a class="navbar-brand" style="font-weight: 200;" href="index.php">Glamify <i class='fa fa-shopping-cart'></i> </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-5 links" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- <a class="nav-link text-white items" href="home.php">Home</a> -->
                    </li>

                    <div class="dropdown items">
                        <button type="button" class="btn text-white dropdown-toggle" data-toggle="dropdown">
                            Shop
                        </button>
                        <div class="dropdown-menu" style='background-color: blanchedalmond;'>
                            <a class="dropdown-item " href="womensproduct.php">Women's Collection</a>
                            <a class="dropdown-item " href="babyproducts.php">Kid's Collection</a>
                            <a class="dropdown-item " href="menscollection.php">Men's Collection</a>


                        </div>
                    </div>

                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200;" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200;" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200;" href="contactus.php">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200;" href="userindex.php">My Account</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white item" style="font-weight: 200; background-color: red; " href="logout.php"><i class='fa fa-power-off'></i> </a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Address</th>
                                <th>Small Size</th>
                                <th>Large Size</th>
                                <th>Medium Large</th>
                                <th>Patient Size</th>
                                <th>Ordered At</th>
                                <th>Total Rupees</th>
                                <th>Action</th>
                                <!-- <th><a href="pdf.php?file=gfgpdf">Download PDF Now</a></th> -->





                            </tr>
                        </thead>
                        <tbody>
                            <h1>Pampers Orders</h1>

                            <?php
                            include 'connection.php';


                            if (!isset($_GET['cartdata'])) {
                                // echo "Cart is empty";
                            } else if (isset($_GET['cartdata'])) {
                                $data = $_GET['cartdata'];
                                $query = "SELECT * FROM `pampers` WHERE `email` = '$data'";
                                $result = mysqli_query($conn, $query);

                                // $_SESSION = $_GET['cartdata'];

                                $row = mysqli_fetch_assoc($result);
                                $id = ($row['id']);
                                $email = ($row['email']);
                                $name = ($row['user_name']);
                                $ucontact = ($row['user_contact']);
                                $uaddress = ($row['user_address']);
                                $ssize = ($row['small_size']);
                                $msize = ($row['medium_size']);
                                $lsize = ($row['large_size']);
                                $psize = ($row['patient_size']);
                                $date = ($row['order_at']);


                                echo "<tr>
                                <td>$id</td>   
                                <td>$email</td>
                                <td>$name</td>
                                <td>$ucontact</td>
                                <td>$uaddress</td>
                                <th>$ssize</th>
                                <th>$msize</th>
                                <th>$lsize</th>
                                <th>$psize</th>
                                <td>$date</td>
                                <td id='total' style='font-weight: 600;'></td>
                                <td><a href='delete.php?clcorder={$id}' class='btn btn-danger'>Cancle Order</a></td>




            
            
                                </tr>";
                            }

                            ?>
                            <script>
                                var ssize = <?php echo $ssize * 50; ?>;
                                var msize = <?php echo $msize * 75; ?>;
                                var lsize = <?php echo $lsize * 100; ?>;
                                var psize = <?php echo $psize * 100; ?>;
                                var total = ssize + msize + lsize + psize;

                                document.getElementById("total").innerHTML = total;
                            </script>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </body>

    </html>




<?php } ?>
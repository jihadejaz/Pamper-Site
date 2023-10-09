<?php session_start(); { ?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Filtered Products</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            /* background: lightblue; */
            background-color: #e9eef2;

        }



        .pages {
            gap: 50px;
        }

        @media screen and (max-width:775px) {
            .pages {
                gap: 10px;
                font-size: 10px;
            }

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
            }

            .items:hover {
                background-color: blue;
            }

        }
    </style>

    <body>

        <nav class="navbar navbar-expand-md navbar-dark header" style="background:  #000000;">
            <a class="navbar-brand" style="font-weight: 200;" href="index.php">Glamify Store</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-5 links" id="collapsibleNavbar">
                <ul class="navbar-nav">

                    <div class="dropdown items">
                        <button type="button" class="btn text-white dropdown-toggle" data-toggle="dropdown">
                            Shop
                        </button>
                        <div class="dropdown-menu" style='background-color: blanchedalmond;'>
                            <a class="dropdown-item" style="padding: 0;" href="womensproduct.php">Women's Collection</a>
                            <a class="dropdown-item" href="babyproducts.php">Kid's Collection</a>
                            <a class="dropdown-item" href="menscollection.php">Men's Collection</a>

                        </div>
                    </div>
                    <li class="nav-item">
                        <!-- <a class="nav-link text-white items" href="home.php">Home</a> -->
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
                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200;" href="babyproducts.php">Baby Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200;" href="userindex.php">My Account <i class='fa fa-user'></i> </a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200;" href="adminindex.php"><?php echo isset($_SESSION['emailz']); ?> <i class='fa fa-user'></i> </a>
                    </li> -->


                </ul>
            </div>
        </nav>

        <div class="container-fluid mt-3">
            <button class='btn btn-outline' style='border-radius: 0; background: indigo;'><a class='text-white link' style='text-decoration: none;' href="womensproduct.php">Go back</a></button>
        </div>


        <div class="container-fluid d-flex mt-0 p-sm-5">
            <div class="row">


                <?php
                include 'connection.php';
                if (isset($_GET['flt>1000'])) {


                    $query = mysqli_query($conn, "SELECT * FROM `womensproduct` where price > 1000");

                    while ($row = mysqli_fetch_assoc($query)) {
                        $id = $row['id'];

                ?>

                        <div class="col-md-3">

                            <div class="card" style='background-color: #e9eef2;'>
                                <a href="" style='color: red; font-size: 30px; '><i class='fa fa-heart' style='position: absolute ; left: 20px; top: 20px;'></i></a>
                                <a href="viewproduct.php?wview=<?php echo $row['id']; ?>"><img class="card-img-top" src="<?php echo $row['img']; ?>" alt="Card image" width=""></a>
                                <div class="card-body">
                                    <h4 class="card-title" style='font-weight: 200;'><?php echo $row['name']; ?></h4>
                                    <p class="card-text"><?php echo $row['description']; ?></p>


                                    <!-- <a class="btn btn-danger" href="delete.php?id=<?php echo $id ?>">Delete</a> -->

                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <h5 style='font-weight: 350;'>Rs<?php echo $row['price'] ?><del style='font-size: 15px;'> <?php echo $row['deletedprice'] ?></del></h5>


                                    <button class='btn btn-primary' id='cart' style='border-radius:0px;  border: transparent; background-color: indigo; font-weight: 350;'>Add to Cart <i class='fa fa-shopping-cart'></i> </button>
                                </div>
                            </div>
                        </div>

                    <?php }
                } elseif (isset($_GET['flt<500'])) {




                    $query = mysqli_query($conn, "SELECT * FROM `womensproduct` where price < 500");

                    while ($row = mysqli_fetch_assoc($query)) {
                        $id = $row['id'];

                    ?>
                        <div class="col-md-3">

                            <div class="card" style='background-color: #e9eef2;'>
                                <a href="" style='color: red; font-size: 30px; '><i class='fa fa-heart' style='position: absolute ; left: 20px; top: 20px;'></i></a>
                                <a href="viewproduct.php?wview=<?php echo $row['id']; ?>"><img class="card-img-top" src="<?php echo $row['img']; ?>" alt="Card image" width=""></a>
                                <div class="card-body">
                                    <h4 class="card-title" style='font-weight: 200;'><?php echo $row['name']; ?></h4>
                                    <p class="card-text"><?php echo $row['description']; ?></p>


                                    <!-- <a class="btn btn-danger" href="delete.php?id=<?php echo $id ?>">Delete</a> -->

                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <h5 style='font-weight: 350;'>Rs<?php echo $row['price'] ?><del style='font-size: 15px;'> <?php echo $row['deletedprice'] ?></del></h5>


                                    <button class='btn btn-primary' id='cart' style='border-radius:0px;  border: transparent; background-color: indigo; font-weight: 350;'>Add to Cart <i class='fa fa-shopping-cart'></i> </button>
                                </div>
                            </div>
                        </div>


                    <?php }
                } elseif (isset($_GET['bflt<500'])) {




                    $query = mysqli_query($conn, "SELECT * FROM `babyproducts` where price < 500");

                    while ($row = mysqli_fetch_assoc($query)) {
                        $id = $row['id'];

                    ?>
                        <div class="col-md-3">

                            <div class="card" style='background-color: #e9eef2;'>
                                <a href="" style='color: red; font-size: 30px; '><i class='fa fa-heart' style='position: absolute ; left: 20px; top: 20px;'></i></a>
                                <a href="viewproduct.php?wview=<?php echo $row['id']; ?>"><img class="card-img-top" src="<?php echo $row['img']; ?>" alt="Card image" width=""></a>
                                <div class="card-body">
                                    <h4 class="card-title" style='font-weight: 200;'><?php echo $row['name']; ?></h4>
                                    <p class="card-text"><?php echo $row['description']; ?></p>


                                    <!-- <a class="btn btn-danger" href="delete.php?id=<?php echo $id ?>">Delete</a> -->

                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <h5 style='font-weight: 350;'>Rs<?php echo $row['price'] ?><del style='font-size: 15px;'> <?php echo $row['deletedprice'] ?></del></h5>


                                    <button class='btn btn-primary' id='cart' style='border-radius:0px;  border: transparent; background-color: indigo; font-weight: 350;'>Add to Cart <i class='fa fa-shopping-cart'></i> </button>
                                </div>
                            </div>
                        </div><?php }
                        } elseif (isset($_GET['bflt>1000'])) {




                            $query = mysqli_query($conn, "SELECT * FROM `babyproducts` where price > 1000");

                            while ($row = mysqli_fetch_assoc($query)) {
                                $id = $row['id'];

                                ?>
                        <div class="col-md-3">

                            <div class="card" style='background-color: #e9eef2;'>
                                <a href="" style='color: red; font-size: 30px; '><i class='fa fa-heart' style='position: absolute ; left: 20px; top: 20px;'></i></a>
                                <a href="viewproduct.php?wview=<?php echo $row['id']; ?>"><img class="card-img-top" src="<?php echo $row['img']; ?>" alt="Card image" width=""></a>
                                <div class="card-body">
                                    <h4 class="card-title" style='font-weight: 200;'><?php echo $row['name']; ?></h4>
                                    <p class="card-text"><?php echo $row['description']; ?></p>


                                    <!-- <a class="btn btn-danger" href="delete.php?id=<?php echo $id ?>">Delete</a> -->

                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <span class='fa fa-star'></span>
                                    <h5 style='font-weight: 350;'>Rs<?php echo $row['price'] ?><del style='font-size: 15px;'> <?php echo $row['deletedprice'] ?></del></h5>


                                    <button class='btn btn-primary' id='cart' style='border-radius:0px;  border: transparent; background-color: indigo; font-weight: 350;'>Add to Cart <i class='fa fa-shopping-cart'></i> </button>
                                </div>
                            </div>


                    <?php }
                        } ?>


                        </div>
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
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </body>

    </html>
<?php } ?>
<?php

error_reporting(0);
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Product Details</title>
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

    @media screen and (max-width:767px) {

        .items {
            margin-left: -45px;
            /* background-color:blue ; */
            cursor: progress;
        }

        .items:hover {
            background-color: indigo;

        }



        .items:hover {
            background-color: indigo;
            border-radius: 5px;
        }

        #proname {
            font-size: 30px;
        }

        #proprice {
            font-size: 20px;
            /* font-weight: 300; */
        }

        #prosize {
            font-size: 30px;
        }







    }

    #proname {
        margin-top: -50px;
    }

    #proprice {
        margin-top: -25px;
    }
</style>





<body>

    <nav class="navbar navbar-expand-md navbar-dark header" style="background-color: #000000 ;">
        <a class="navbar-brand" style="font-weight: 200;" href="index.php">Glamify Store</a>

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
                <!-- <li class="nav-item">
                    <a class="nav-link text-white items" style="font-weight: 200; background: red;" href="logout.php"><i class='fa fa-power-off'></i> </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link text-white items" style="font-weight: 200; background: indigo; " href="userindex.php"><?php echo isset($_SESSION['useremail']); ?> <i class='fa fa-user'></i> </a>
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
                        <a class="nav-link text-white" id="items" style="font-weight: 200; background-color: indigo; " href="userorders.php?cart=<?php echo $_SESSION['useremail']; ?>">Cart <i class='fa fa-shopping-cart'></i></a>
                    </li> <?php } ?>

            </ul>
        </div>
    </nav>

    <div class="container-fluid mt-5" style="height: 100vh;">
        <div class="row">

            <?php
            include 'connection.php';

            if (isset($_GET['view'])) {
                $id = $_REQUEST['view'];
                $query = mysqli_query($conn, "SELECT * FROM `babyproducts` WHERE `id` = $id");
                $row = mysqli_fetch_assoc($query);


            ?>

                <div class="col-md-6">
                    <img src="<?php echo $row['img'] ?>" alt="" style="width: 500px;" class='img-fluid p-0 mx-1'>
                </div>

                <div class="col-md-6  mt-5">

                    <form action="insertcart.php" method="POST" enctype="multipart/form-data">

                        <h1 style='font-weight: 500;' name="nm" id="proname"><?php echo $row['name']; ?></h1>
                        <input type="hidden" name="namee" value="<?php echo $row['name']; ?>">
                        <input type="hidden" name="email" value="<?php echo $_SESSION['useremail']; ?>">
                        <input type="hidden" name="image" value="<?php echo $row['img']; ?>">


                        <!-- <input type="hidden" name="" >  -->
                        <h5 style='font-size: 15px; font-weight: 200;'>Product ID <?php echo $_GET['view']; ?></h5>
                        <hr>
                        <div class="container p-0 mt-5">
                            <h3 id="proprice" name='pname' style='font-weight: 500;'>Rs<?php echo $row['price']; ?></h3>
                            <input type="hidden" name="pprice" value="<?php echo $row['price']; ?>">

                            <div class="container p-0 d-flex">

                                <span class='fa fa-star mt-1'></span>
                                <span class='fa fa-star mt-1'></span>
                                <span class='fa fa-star mt-1'></span>
                                <span class='fa fa-star mt-1'></span>
                                <span class='fa fa-star mt-1'></span>
                                <dfn style="font-weight: 350;">1,878 reviews</dfn>
                            </div>
                        </div>
                        <hr>
                        <h3 id="prosize" style='font-weight: 300;'>SIZE</h3>
                        <!-- <form action="" class="" method="post"> -->
                        <!-- <button class='btn btn-outline-primary text-white' style='border-radius:0px; margin-left: 20px; border: transparent; background-color: indigo; font-weight: 200; '>Small Size</button>
                        <button class='btn btn-outline-primary text-white' style='border-radius:0px; margin-left: 20px; border: transparent; background-color: indigo; font-weight: 200;'>Medium Size</button>
                        <button class='btn btn-outline-primary text-white' style='border-radius:0px; margin-left: 20px; border: transparent; background-color: indigo; font-weight: 200;'>Large Size</button> -->

                        <label for="ssize">SMALL</label>
                        <input id="ssize" name="size" value="small" type="radio">

                        <label for="msize">MEDIUM</label>
                        <input id="msize" name="size" value="medium" type="radio">

                        <label for="lsize">LARGE</label>
                        <input id="lsize" name="size" value="large" type="radio">


                        <hr>

                        <div class="container mt-3 p-0 d-flex">
                            <!-- <h3 class="mt-3" style='font-weight: 300;'>Quantity</h3> -->
                            <select name="qty" style="padding: 7px 50px;" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>

                            </select>
                            <button href=class='btn btn-primary' type="submit" name="insertcart" style='border-radius:0px; margin-left: 20px; border: transparent; background-color: cyan; font-weight: 200;'>Add to Cart</button>
                        </div>

                    </form>

                    <!-- </form> -->
                </div>
        </div>
    </div>



<?php

            } elseif (isset($_GET['wview'])) {
                $id = $_REQUEST['wview'];
                $query = mysqli_query($conn, "SELECT * FROM `womensproduct` WHERE `id` = $id");
                $row = mysqli_fetch_assoc($query); ?>

    <div class="col-md-6 ">
        <img src="<?php echo $row['img'] ?>" alt="" style="width: 500px;" class='img-fluid p-0 mx-1'>
    </div>
    <div class="col-md-6  mt-5">
        <h1 style='font-weight: 300;' id="proname"><?php echo $row['name']; ?></h1>
        <h5 style='font-size: 15px; font-weight: 200;'>Product ID <?php echo $_GET['wview']; ?></h5>

        <hr>
        <div class="container p-0 mt-5">
            <h3 id="proprice" style='font-weight: 300;'>Rs<?php echo $row['price']; ?></h3>
            <div class="container p-0 d-flex">

                <span class='fa fa-star mt-1'></span>
                <span class='fa fa-star mt-1'></span>
                <span class='fa fa-star mt-1'></span>
                <span class='fa fa-star mt-1'></span>
                <span class='fa fa-star mt-1'></span>
                <dfn style="font-weight: 600;">1,878 reviews</dfn>
            </div>
        </div>
        <hr>
        <h3 id="prosize" style='font-weight: 300;'>Size</h3>
        <form action="" class="" method="post">
            <!-- <button class='btn btn-outline-primary text-white' style='border-radius:0px; margin-left: 20px; border: transparent; background-color: indigo; font-weight: 200; '>Small Size</button>
                        <button class='btn btn-outline-primary text-white' style='border-radius:0px; margin-left: 20px; border: transparent; background-color: indigo; font-weight: 200;'>Medium Size</button>
                        <button class='btn btn-outline-primary text-white' style='border-radius:0px; margin-left: 20px; border: transparent; background-color: indigo; font-weight: 200;'>Large Size</button> -->

            <label for="ssize">SMALL</label>
            <input id="ssize" name="size" value="tick" type="checkbox">

            <label for="msize">MEDIUM</label>
            <input id="msize" name="size" value="tick" type="checkbox">

            <label for="lsize">LARGE</label>
            <input id="lsize" name="size" value="tick" type="checkbox">


            <hr>

            <div class="container mt-3 p-0 d-flex">
                <!-- <h3 class="mt-3" style='font-weight: 300;'>Quantity</h3> -->
                <select name="" style="padding: 7px 50px;" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>

                </select>
                <button class='btn btn-primary' name="cartdata2" style='border-radius:0px; margin-left: 20px; border: transparent; background-color: indigo; font-weight: 200;'>Add to cart</button>
            </div>



        </form>
    </div>
    </div>
    </div>

<?php } ?>







<div class="container mt-0 p-4"></div>




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
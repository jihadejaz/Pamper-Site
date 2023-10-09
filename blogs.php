<?php error_reporting(0) ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>GLAMIFY 2.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    @media screen and (max-width:550px) {
        #mobilenav {
            display: none;
        }

        #banner1 {
            height: 25vh;

        }

        #blogheading {
            font-size: 15px;
        }

        /* #proimage2{
            width: 200px;
        } */



    }

    @media screen and (max-width:540px) {
        /* #mobilecart { */
        /* margin-left: 270px; */
        /* } */

        #storename {
            font-size: 20px;
            color: yellow;
        }

    }

    #btnclose {
        margin-left: 330px;
    }

    #vbutton {
        background-color: pink;
    }

    #vbutton:hover {
        background-color: black;
        color: white;
    }

    .fixed-image {
        width: 600px;
        /* Set the desired width */
        /* height: 100vh; */
        /* Set the desired height */
    }

    /* #proimage {
        width: 350px;
        height: 450px;
    } */
</style>

<body>

    <!-- header   -->

    <!-- MOBILE NAV   -->
    <div class="offcanvas offcanvas-start" id="demo">
        <div class="offcanvas-header">
            <!-- <h6 class="offcanvas-title">Heading</h6> -->
            <button type="button" id='btnclose' class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">

            <ul class="nav d-inline">
                <li class="nav-item">
                    <a class="nav-link" style='color:black;' href="index.php">Home</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" style='color:black;' href="#">Contact Us</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" style='color:black;' href="#">Shop</a>
                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" style='color:black;' href="login.php">Login</a>

                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" style='color:black;' href="admin.php">Admin</a>

                </li>
                <hr>

                <li class="nav-item">
                    <a class="nav-link" style='color:black;' href="blogs.php">Blogs</a>

                </li>
                <hr>
                <li class="nav-item">
                    <a class="nav-link" style='color:black;' href="addblog.php">Edit Blog </a>

                </li>
            </ul>
            <!-- <button class="btn btn-secondary" type="button">A Button</button> -->
        </div>
    </div>

    <!-- MOBILE NAV END  -->

    <div class="container-fluid bg-dark" style='height:5vh;'></div>

    <!-- DESKTOP NAV   -->

    <div class="container-fluid bg-light d-flex ">

        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
            <i class='fa fa-bars'></i>
        </button>

        <ul class="nav justify-content-center mx-5" id='mobilenav' style='margin-left:89px;'>
            <li class="nav-item">
                <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="contactus.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="womensproduct.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="login.php">Login</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="addblog.php">Edit Blog <?php echo $_SESSION['useremail']; ?></a>

            </li>


        </ul>
        <ul class='nav' id='mobilecart'>
            <li class="nav-item">
                <a class="nav-link" style='color:black;' href="#"><i class='fa fa-search'></i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style='color:black;' href="#"><i class='fa fa-heart'></i> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style='color:black;' data-toggle='' toggle-data='' href="userorders.php?cartdata=<?php echo $_SESSION['useremail']; ?>"><i class='fa fa-shopping-bag'></i> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" style='color:red;' href="logout.php"><i class='fa fa-power-off'></i> </a>
            </li>
        </ul>


    </div>

    <!-- DESKTOP NAV END   -->


    <!-- header end   -->

    <!-- MAIN BODY   -->

    <div class="container-fluid bg-light p-sm-5 mt-5 border">
        <div class="row ">
            <div class="col-md-6">
                <?php include 'connection.php';
                $query = mysqli_query($conn, "SELECT * FROM `blogs`");


                while ($row = mysqli_fetch_assoc($query)) {
                    $id = $row['blog_id']; ?>



                    <div class="container p-0">

                        <a href="<?php echo $id ?>"><img src="<?php echo $row['image']; ?>" class="img-fluid fixed-image" alt=""></a>
                        <h6 style="margin-left: 20px; font-weight: 300;" class="mt-2"> <span style="font-weight: 500;">Added by</span> <?php echo $row['added_by']; ?> <?php echo $row['added_on'] ?> <span><a href=""><i class="fa fa-twitter"></i> </a></span> </h6>

                        <h5 id="blogheading"><?php echo $row['blog_text'] ?></h5>

                        
                        <hr>

                    </div>


                <?php
                } ?>



            </div>
        </div>
    </div>



    <!-- MAIN BODY END   -->

    <!-- footer   -->
    <?php include 'footer.php'; ?>
    <!-- footer end   -->

</body>

</html>
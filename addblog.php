<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['useremail'])) {

    echo "<script>
        window.location.href='login.php';
        </script>";
} else { ?>
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
                        <a class="nav-link" style='color:black;' href="userindex.php"><?php echo $_SESSION['useremail']; ?></a>

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
                    <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="womensproduct.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="login.php">Login</a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="blogs.php">Blog</a>

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
                    <a class="nav-link" style='color:black;' data-toggle='' toggle-data='' href="viewcart.php"><i class='fa fa-shopping-bag'></i> </a>
                </li>
            </ul>


        </div>

        <!-- DESKTOP NAV END   -->

        <!-- header end   -->

        <!-- MAIN BODY   -->

        <form action="addblog.php" method='post' id="" class="container" style="margin-top: 70px;" enctype="multipart/form-data">

            <div class="form-group">
                <!-- <label for="pname">Name:</label> -->
                <input type="name" id='pname' name='ename' placeholder="<?php echo $_SESSION['useremail']; ?>" class="form-control">
            </div>
            <br>

            <div class="form-group">
                <!-- <label for="pimage">Image:</label> -->
                <input type="file" id='pimage' name='eimage' class="form-control">
            </div>

            <br>

            <div class="form-group">
                <!-- <label for="pdescription">Description:</label> -->
                <textarea type="text" id='pdescription' name='blog' placeholder="Type Blog here" class="form-control"></textarea>
            </div>


            <br>

            <button class='btn-primary' name='savedata' style="border: 0px; padding: 10px 25px;" type='submit'>Add Blog</button>

        </form>





        <!-- MAIN BODY END   -->

        <!-- footer   -->
        <?php include 'footer.php'; ?>
        <!-- footer end   -->

    </body>

    </html>
<?php } ?>
<?php

include 'connection.php';

if (isset($_POST['savedata'])) {

    $name = $_POST['ename'];
    $files = $_FILES['eimage'];
    $blog = $_POST['blog'];
    // $price = $_POST['pprice'];
    // $discount = $_POST['dprice'];


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
            window.location.href='blogs.php';
            </script>";


            $sql = "INSERT INTO `blogs` (`blog_text`,`image`,`added_by`) VALUES ('$blog','$destnationfile','$name')";
            // echo $sql;
            $query = mysqli_query($conn, $sql);
            mysqli_close($conn);



            if ($query) {
                echo 'insert success';
            } else {
                echo 'error uploading ';
            }
        }
    }
}

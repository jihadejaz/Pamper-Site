<!-- BISMILLAH   -->

<?php session_start(); { ?>
  <!doctype html>
  <html lang="en">

  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/index3.css"> -->
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

    .section1 {
      /* height: 100vh; */
      background-color: #e9eef2;

    }

    .img1 {
      background-size: cover;
      width: 1000px;
    }

    @media screen and (max-width:767px) {
      #heading1 {
        font-size: 25px;
        margin-top: 20px;
      }

      .orderbtn {
        padding: 2px;
      }

      /* .footer{
      margin-top: 500px;
    } */


    }

    .items:hover {
      background-color: indigo;
      border-radius: 5px;
    }

    .items1:hover {
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

      #items {
        margin-left: -45px;
        /* background: yellow; */
      }

      .items:hover {
        background-color: indigo;

      }

      #cod {
        font-size: 13px;
      }


    }

    .form-control {
      border-radius: 0;
      /* background-image: linear-gradient(to right, cyan, white); */
      /* font-style: italic; */

    }



    .footer {
      margin-top: 335px;
    }

    .orderbtn {
      border-radius: 0px;
      border: transparent;
      padding: 10px 30px;
      background-color: indigo;

    }



    .orderbtn:hover {
      background-color: blue;
      box-shadow: #54456b 2px;
    }

    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }

    .box1 {
      display: flex;
      margin-left: 53px;
    }

    @media screen and (max-width: 745px) {
      .box1 {
        width: auto;
      }
    }

    #catimage {
      width: 100px;
    }
  </style>

  <body>

    <div class="container-fluid bg-dark" style='height:5vh;'></div>


    <!-- header -->

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

          <li class="nav-item">
            <a class="nav-link text-white items" style="font-weight: 200;" href="blogs.php">Blogs</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" id="items" style="font-weight: 200; background-color: indigo; " href="userindex.php?cartdata=<?php echo isset($_SESSION['useremail']); ?>">My Account <i class='fa fa-user'></i></a>
          </li>



        </ul>
      </div>
    </nav>






    <!-- Main Body -->

    <div class="container-fluid mt-5 p-3 section1">
      <div class="row">
        <div class="col-md-12">
          <div class="mt-0">
            <?php
            if (isset($_GET['msg'])) { ?>
              <div class="alert alert-success text-dark alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h6>
                  <?php echo $_GET['msg']; ?>

                </h6>

              </div>
            <?php } ?>
          </div>

          <!-- ORDER   -->

          <div class="container-fluid mt-3">
            <h1 id="heading1" class="text-center" style='font-weight: 200; '>Order Pamper Now</h1>

            <center><button type="button" class="shadow-lg text-white mt-1 orderbtn" style="font-weight: 200; " data-toggle="modal" data-target="#myModal">Order Now <i class='fa fa-shopping-bag'></i></button></center>

          </div>

          <!-- ORDER END   -->

          <!-- <div class="container-fluid">
            <div class="row">
              <div class="col-sm-2">
                <img src="images/11.jpg" id='' alt="" class='rounded-circle ' width='200'>
              </div>
              <div class="col-sm-2">
                <img src="images/11.jpg" id='' alt="" class='rounded-circle' width='200'>
              </div>
            </div>
          </div> -->

          <!-- BANNER   -->

          <div class="container-fluid mt-3 p-0">
            <img src="images/banner.jpg" class="img-fluid" alt="">
          </div>

          <!-- BANNER END   -->

          <!-- HEADING   -->

          <div class="container-fluid">
            <h1 id="heading1" class='mt-5 p-1 text-center' style='font-weight: 300;'>Kid's Featured Products</h1>
            <!-- <i class='fa fa-facebook'></i>  -->
          </div>

          <!-- HEADING END   -->

          <!-- KIDS PRODUCT -->

          <div class="container-fluid d-flex mt-0 p-sm-5">
            <div class="row">

              <?php
              include 'connection.php';
              $query = mysqli_query($conn, "select * from `babyproducts`");
              while ($row = mysqli_fetch_assoc($query)) {
                $id = $row['id'];
                // echo "<pre>";
                // print_r($row);
                // echo "</pre>";

              ?>
                <div class="col-md-3">

                  <div class="card" style="border-radius: 10px; border:0px; background-color: #e9eef2;">
                    <a href="" style='color: red; font-size: 30px; '><i class='fa fa-heart' style='position: absolute ; left: 20px; top: 20px;'></i></a>
                    <a href="viewproduct.php?view=<?php echo $row['id']; ?>"><img class="card-img-top img-fluid" src="<?php echo $row['img']; ?>" alt="Card image" width=""></a>
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


                      <!-- <button class='btn btn-primary' id='cart' style='border-radius:0px;  border: transparent; background-color: indigo; font-weight: 350;'>Add to Cart <i class='fa fa-shopping-cart'></i> </button> -->

                    </div>
                  </div>
                </div>

              <?php } ?>
            </div>
          </div>

          <!-- KIDS PRODUCT END   -->


          <!-- HEADING 2   -->

          <div class="container-fluid">
            <h1 id="heading1" class='mt-5 p-1 text-center' style='font-weight: 300;'>Women's Featured Products</h1>
            <!-- <i class='fa fa-facebook'></i>  -->
          </div>
          <!-- HEADING 2 END   -->

          <!-- BANNER 2 -->

          <div class="container-fluid p-0">
            <img src="images/web page2i.jpg" class='img-fluid' alt="">
          </div>

          <!-- BANNER 2 END   -->

          <!-- WOMENS PRODUCT  -->

          <div class="container-fluid mt-5 p-sm-5">
            <div class="row">
              <?php
              include 'connection.php';
              $query = mysqli_query($conn, "SELECT * FROM `womensproduct`");
              while ($row = mysqli_fetch_assoc($query)) {
                $id = $row['id'];
              ?>

                <div class="col-md-3">

                  <div class="card" style='background-color: #e9eef2; border:0px;'>
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


                      <!-- <button class='btn btn-primary' id='cart' style='border-radius:0px;  border: transparent; background-color: indigo; font-weight: 350;'>Add to Cart <i class='fa fa-shopping-cart'></i> </button> -->

                    </div>
                  </div>
                </div>

              <?php } ?>

            </div>
          </div>

          <div class="container-fluid d-flex mt-0 p-sm-5">
            <div class="row mt-5">

              <div class="col-md-3 ">
                <div class="card border-0">

                  <img class="card-img-top img-fluid" id="proimage" src="images/6.jpg" alt="Card image">

                  <div class="card-body ">
                    <h4 class="card-title" style="font-size: 15px; font-weight: 350;">Winter Yellow Sweatshirt</h4>

                    <!-- <a href="" style='color: black;  font-size: 20px;'><i style='position: absolute ; left: 280px; top: 490px;' class='card-text mt-1 fa fa-shopping-bag'></i></a> -->
                    <div class="container d-flex  justify-content-between">
                      <p class="card-text">$ 999</p>

                      <a href="" style='font-size:15px; color:black;'><i class='fa fa-shopping-bag'></i> </a>
                      <!-- <a href=""><i class='fa fa-heart'></i> </a>  -->

                    </div>
                  </div>
                </div>
              </div>






            </div>
          </div>

          <!-- WOMENS PRODUCT END   -->


          <!-- MODAL    -->
          <?php
          // error_reporting(0);
          // session_start();
          if (!isset($_SESSION['useremail'])) {
            // ini_set('error_reporting', 0);
            echo "<script>
            alert 'Login to place order';
            </script>";
          } else { ?>
            <div class="container">
              <!-- <h2>Modal Example</h2> -->
              <!-- Button to Open the Modal -->
              <!-- The Modal -->
              <div class="modal fade" style='background-color: blanchedalmond;' id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content" style="background-color: indigo;">

                    <!-- Modal Header -->
                    <div class="modal-header header" style="background-color: black;">
                      <h4 class="modal-title text-white">Place Your Order</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" style='background-color: #e9eef2;'>
                      <form action="query.php" method="post" enctype="multipart/form-data">
                        <div class="container">
                          <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="name" id="name" placeholder="Your Name" required name="uname" class="form-control">
                          </div>
                        </div>

                        <div class="container">
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" placeholder="Your Email" required name="uemail" class="form-control">
                          </div>
                        </div>

                        <div class="container">
                          <div class="form-group">
                            <label for="contact">Contact:</label>
                            <input type="number" id="contact" placeholder="Your Number" required name="ucontact" class="form-control">
                          </div>
                        </div>

                        <div class="container">
                          <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" placeholder="Your Address" required name="uaddress" class="form-control">
                          </div>
                        </div>

                        <div class="container">
                          <div class="form-group">
                            <label for="ssize">Small Size:</label>
                            <input type="number" id="ssize" placeholder="Small Size Quantity Rs25" name="ss" required class="form-control">
                          </div>
                        </div>

                        <div class="container">
                          <div class="form-group">
                            <label for="msize">Medium Size:</label>
                            <input type="number" id="msize" placeholder="Medium Size Quantity Rs50" required name="ms" class="form-control">
                          </div>
                        </div>

                        <div class="container">
                          <div class="form-group">
                            <label for="lsize">Large Size:</label>
                            <input type="number" id="lsize" placeholder="Large Size Quantity Rs100" required name="ls" class="form-control">
                          </div>
                        </div>

                        <div class="container">
                          <div class="form-group">
                            <label for="psize">Patient Size:</label>
                            <input type="number" id="psize" placeholder="Patient Size Quantity" required name="ps" class="form-control">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <span style='font-weight: 500;' id="cod">*Cash on delivery available</span>

                          <button type='submit' class='btn btn-primary' name="savedata" style='border-radius:0px; border: transparent; background-color: indigo; font-weight: 200;'>Order</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

          <!-- MODAL END -->

          <!-- <div class="container-fluid p-5">
            <div class="row bg-info">
              <div class="col-md-2">
                <img src="images/11.jpg" class='img-fluid' alt=""> 

              </div>
            </div>
          </div>  -->

          <!-- FOOTER   -->


          <div class="container-fluid p-sm-1" id='footer' style='background-color: #e9eef2;'>
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

          <!-- FOOTER END      -->





          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        </div>
      </div>
    </div>


  </body>

  </html>
<?php } ?>

<script>





</script>

<!-- MAIN BODY END   -->
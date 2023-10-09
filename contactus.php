<?php
session_start();
if (isset($_SESSION['useremail'])) {
} else { ?>
  <!doctype html>
  <html lang="en">

  <head>
    <title>Contact us</title>
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

    .form-control {
      border: 0;

    }

    .d-flex {
      gap: 20px;
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
            <!-- <a class="nav-link text-white items" style="font-weight: 200;" href="babyproducts.php">Baby Products</a> -->
          </li>

          <li class="nav-item">
            <a class="nav-link text-white items" style="font-weight: 200;" href="userindex.php"><?php echo isset($_SESSION['useremail']); ?></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid">
      <h1 class='text-center' style='color: #000000; font-weight: 350;'>Contact Form</h1>

      <div class="row p-2">

        <div class="col-md-6 mt-0 p-2">
          <p class='mt-5'>Need to get in touch? No problem! You can use our contact form to send us a message.</p>
          <ul class=''>
            <li>Need a support? Check our available support options</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet magni nostrum itaque libero. Beatae voluptatem nemo rem eos debitis ab. </li>

          </ul>
        </div>

        <div class="col-md-6 mt-2 p-2">
          <form action="contactquery.php" method='post' enctype="multipart/form-data">
            <div class="form-group d-flex">
              <!-- <label for="">Email</label> -->
              <input type="email" placeholder="Your Name" name='' class='form-control'>
              <!-- <label for="">Email</label> -->
              <input type="email" placeholder="Your Email" name='' class='form-control'>
            </div>

            <div class="form-group">
              <input type="text" class='form-control' placeholder='Subject'>
            </div>

            <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message" rows="10"></textarea>

            </div>

            <div class="form-group">
              <input type="checkbox" name=''>
              <dfn>I've read and accept the privacy policy</dfn>
            </div>

            <button class='btn-primary' type='submit' name='savedata' style='border:0px; padding: 10px 25px; background-color: indigo;'>Send</button>


          </form>
        </div>
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
  </body>

  </html>

<?php } ?>
<?php
session_start();
if ($_SESSION['emailz'] == null) {

  echo "<script>
        window.location.href='login.php';
        </script>";
} else { ?>
  <!doctype html>
  <html lang="en">

  <head>
    <title>Admin Panel</title>
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

    .items:hover {
      background-color: indigo;
      border-radius: 5px;
    }
  </style>

  <body>

    <div class="container">
      <div class="row">
        <?php { ?>

          <h1><?php echo $_SESSION['emailz']; ?></h1>
        <?php }

        ?>


      </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-dark header fixed-top" style="background: #000000;">
      <a class="navbar-brand" href="adminindex.php" style="font-weight: 200;">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ml-5 links" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white items" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white items" style="font-weight: 200;" href="#"><?php echo $_SESSION['emailz']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white items" style="font-weight: 200;" style="font-weight: 200;" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white items" style="font-weight: 200;" href="#">Privacy Policy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white items" style="font-weight: 200;" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white items" style="font-weight: 200;" href="usersrecord.php">Records</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white items" style="font-weight: 200;" href="addproducts.php">Add Products</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white items" href="myorders.php">Orders</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white items" style="font-weight: 200;" href="logout.php">Logout</a>
          </li>

        </ul>
      </div>
    </nav>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>

  </html>

<?php } ?>
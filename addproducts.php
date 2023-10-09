<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
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
    border-radius: 0px;
  }

  .items:hover {
    background-color: indigo;
    border-radius: 5px;
  }

  @media screen and (max-width:765px) {
    #sec1 {
      margin-top: 18%;
      /* background-color: black; */
    }

    .items {
      margin-left: -45px;
      /* background-color:blue ; */
      cursor: progress;
    }

    .items:hover {
      background-color: indigo;

    }



  }
</style>

<body>

  <nav class="navbar navbar-expand-md navbar-dark header fixed-top" style="background:  #000000;">
    <a class="navbar-brand" style="font-weight: 200;" href="addproducts.php">Kid's Panel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-5 links" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <!-- <a class="nav-link text-white items" href="home.php">Home</a> -->
        </li>

        <li class="nav-item">
          <a class="nav-link text-white items" style="font-weight: 200;" href="#">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white items" style="font-weight: 200;" href="login.php">Login</a>
        </li>

        <div class="dropdown items">
          <button type="button" class="btn text-white dropdown-toggle" data-toggle="dropdown">
            Shop
          </button>
          <div class="dropdown-menu" style='background-color: blanchedalmond;'>
            <a class="dropdown-item " href="womensproduct.php">Women's Collection</a>
            <!-- <a class="dropdown-item " href="babyproducts.php">Kid's Collection</a> -->
            <a class="dropdown-item " href="menscollection.php">Men's Collection</a>


          </div>
        </div>

        <div class="dropdown items">
          <button type="button" class="btn text-white dropdown-toggle" data-toggle="dropdown">
            Add Products
          </button>
          <div class="dropdown-menu" style='background-color: blanchedalmond;'>
            <a class="dropdown-item " href="addwomensproduct.php">Women's Collection</a>
            <a class="dropdown-item " href="addproducts.php">Kid's Collection</a>
            <a class="dropdown-item " href="addmensproduct.php">Men's Collection</a>


          </div>
        </div>
      </ul>
    </div>
  </nav>



  <form action="addproducts.php" method='post' id="sec1" class="container" style="margin-top: 70px;" enctype="multipart/form-data">
    <div class="form-group">
      <!-- <label for="pname">Name:</label> -->
      <input type="name" id='pname' name='pname' placeholder="Name" class="form-control">
    </div>


    <div class="form-group">
      <label for="pimage">Image:</label>
      <input type="file" id='pimage' name='pimage' class="form-control">
    </div>

    <div class="form-group">
      <!-- <label for="pdescription">Description:</label> -->
      <input type="name" id='pdescription' name='pdescription' placeholder="Description" class="form-control">
    </div>

    <div class="form-group">
      <!-- <label for="pprice">Price:</label> -->
      <input type="name" id='pprice' name='pprice' placeholder="Price" class="form-control">
    </div>

    <div class="form-group">
      <!-- <label for="pprice">Price:</label> -->
      <input type="name" id='dprice' name='dprice' placeholder="Discount" class="form-control">
    </div>

    <button class=' btn-primary' name='savedata' style="border: 0px; padding: 10px 25px;" type='submit'>Add product</button>

  </form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php

include 'connection.php';

if (isset($_POST['savedata'])) {

  $name = $_POST['pname'];
  $files = $_FILES['pimage'];
  $description = $_POST['pdescription'];
  $price = $_POST['pprice'];
  $discount = $_POST['dprice'];


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


      $sql = "INSERT INTO `babyproducts` (`name`,`img`,`price`,`deletedprice`) VALUES ('$name','$destnationfile','$price','$discount')";
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
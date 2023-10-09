<!doctype html>
<html lang="en">

<head>
    <title>Checkout</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: blanchedalmond;
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
</style>

<body>
    <nav class="navbar navbar-expand-md navbar-dark header" style="background:  #000000;">
        <a class="navbar-brand" style="font-weight: 200;" href="home.php">Glamify <i class='fa fa-book'></i> </a>

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
                    <a class="nav-link text-white items" style="font-weight: 200;" href="babyproducts.php">Baby Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white items" style="font-weight: 200;" href="addproducts.php">Add Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white items" style="font-weight: 200;" href="myorders.php">Orders</a>
                </li>


            </ul>
        </div>
    </nav>




    <?php
    include 'connection.php';
    // include 'myorders.php';

    if (isset($_GET['chquser'])) {
        $id = $_GET['chquser'];
        $query = "select * from `pampers` where id=$id";

        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['user_name'];
            $ucontact = $row['user_contact'];
            $uaddress = $row['user_address'];
            $ssize = $row['small_size'];
            $msize = $row['medium_size'];
            $lsize = $row['large_size'];
            $psize = $row['patient_size'];
            $date = $row['order_at']; ?>

            <div class="container-fluid mt-1">
                <div class="row">
                    <div class="col-md-12 p-0 text-center">

                        <div class="table-responsive p-3">
                            <h2 style='font-weight: 200;'>Checkout for <?php echo $name; ?></h2>

                            <table class='table table-hover bg-white'>
                                <thead>
                                    <th>Small Size 25Rs/-</th>
                                    <th>Medium Size 50Rs/-</th>
                                    <th>Large Size 75Rs/-</th>
                                    <th>Patient Size 100Rs/-</th>
                                    <th>Total Rupees</th>

                                </thead>

                                <tr style='font-size: 25px;'>
                                    <td><?php echo $ssize; ?></td>
                                    <td><?php echo $msize; ?></td>
                                    <td><?php echo $lsize; ?></td>
                                    <td><?php echo $psize; ?></td>
                                    <td id='total' style='font-weight: 600;'></td>


                                </tr>

                            </table>

                        </div>



                    </div>
                </div>
            </div>


    <?php }
    }
    ?>


    <script>
        var ssize = <?php echo $ssize * 25; ?>;
        var msize = <?php echo $msize * 50; ?>;
        var lsize = <?php echo $lsize * 75; ?>;
        var psize = <?php echo $psize * 100; ?>;
        var total = ssize + msize + lsize + psize;

        document.getElementById("total").innerHTML = total;
    </script>

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
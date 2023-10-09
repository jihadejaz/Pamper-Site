<!doctype html>
<html lang="en">

<head>
    <title>My Orders</title>
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


    .items:hover {
        background-color: indigo;
        border-radius: 5px;
    }
</style>

<body>


    <nav class="navbar navbar-expand-md navbar-dark header fixed-top" style="background:  #000000;">
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

            </ul>
        </div>
    </nav>



    <div class="table-responsive mt-5">

        <table class='table table-striped'>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Small Size</th>
                    <th>Large Size</th>
                    <th>Medium Large</th>
                    <th>Patient Size</th>
                    <th>Ordered At</th>
                    <th>Actions</th>


                </tr>
            </thead>
            <?php
            include 'connection.php';

            $query = "select * from `pampers`";
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
                $date = $row['order_at'];


                echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$ucontact</td>
            <td>$uaddress</td>
            <th>$ssize</th>
            <th>$msize</th>
            <th>$lsize</th>
            <th>$psize</th>
            <td>$date</td>

            <td><a class='badge badge-danger text-white' href='delete.php?dltrecord={$id}'>Delete</a>
            <a class='badge badge-primary text-white' href='checkout.php?chquser={$id}'>Checkout</a></td>


            
            
            </tr>";
            }
            ?>

        </table>
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
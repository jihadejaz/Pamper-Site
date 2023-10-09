<?php
session_start();
if (!isset($_SESSION['useremail'])) {
    // User is not logged in
} else {
?>

    <!doctype html>
    <html lang="en">

    <head>
        <title>Cart</title>
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
    </style>

    <body>

        <nav class="navbar navbar-expand-md navbar-dark header" style="background: #000000;">
            <a class="navbar-brand" style="font-weight: 200;" href="index.php">Glamify Store</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-5 links" style="font-weight: 200;" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200;" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200;" href="contactus.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white items" style="font-weight: 200; " href="addblog.php">Edit blogs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" id="items" style="font-weight: 200; background-color: red; " href="logout.php"><i class='fa fa-power-off'></i> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" id="items" style="font-weight: 200; background-color: indigo;" href="userindex.php">
                            My Account
                            </i>
                        </a>
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
        <table class="table">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Size</th>
                    <th>Price</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sno = 1;
                foreach ($_SESSION as $products) {
                    if (is_array($products)) {
                        echo "<tr>";
                        echo "<td>" . ($sno++) . "</td>";
                        $names = "";
                        $quantity = "";
                        $size = "";
                        foreach ($products as $key => $value) {
                            if ($key == 0) {
                                echo "<td>" . $value . "</td>";
                                $names = $value;
                            } elseif ($key == 2) {
                                echo "<td>" . $value . "</td>";
                                $quantity = $value;
                            } elseif ($key == 1) {
                                echo "<td>" . $value . "</td>";
                                $size = $value;
                            } elseif ($key == 4) {
                                echo "<td>" . $value . "</td>";
                                $price = $value;
                            }
                        }
                        echo "</tr>";
                        // echo "<h1>$names</h1>";
                        // echo "<h1>$quantity</h1>";
                        // echo "<h1>$size</h1>";
                    }
                }
                ?>
            </tbody>
        </table>

        <div class="container">
            <div class="row justify-content-end ">
                <?php



                include 'connection.php';
                $query = "select * from `loggedusers`";
                $result = mysqli_query($conn, $query);
                // $_SESSION['useremail'];
                $row = mysqli_fetch_assoc($result);
                // $id = $row['id'];

                {
                ?>



                    <a class="nav-link text-white badge-primary" id="items" style="font-weight: 200; text-decoration: none;  background-color: blue ; " href="userorders.php?cart=<?php echo $_SESSION['useremail']; ?>">Confirm Order<i class=''></i></a>
                <?php } ?>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0Cp
<?php } ?>
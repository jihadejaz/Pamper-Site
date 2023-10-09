<?php session_start(); { ?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Title</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


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



        .pages {
            gap: 50px;
        }

        @media screen and (max-width:775px) {
            .pages {
                gap: 10px;
                font-size: 10px;
            }

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

            #sortbtn {
                background: transparent;
                color: black;
                border: black 1px solid;

            }

            #filters {
                width: px;
                /* display: flex; */
            }

            #filterbtn {
                width: 120px;
                /* display: flex; */
            }

            .Search {
                border: transparent;
                background-color: black;
            }
        }

        #wishlist:hover {
            color: black;

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

                    <div class="dropdown items">
                        <button type="button" class="btn text-white dropdown-toggle" data-toggle="dropdown">
                            Shop
                        </button>
                        <div class="dropdown-menu" style='background-color: blanchedalmond;'>
                            <a class="dropdown-item" style="padding: 0;" href="womensproduct.php">Women's Collection</a>
                            <a class="dropdown-item" href="babyproducts.php">Kid's Collection</a>
                            <a class="dropdown-item" href="menscollection.php">Men's Collection</a>

                        </div>
                    </div>
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
                        <a class="nav-link text-white items" style="font-weight: 200;" href="userindex.php">My Account <i class='fa fa-user'></i></a>
                    </li>


                </ul>
            </div>
        </nav>

        <div class="container-fluid mt-1">
            <form action='' class="form-inline">

                <div class="input-group">
                    <input type="text" class="form-control bg-transparent Search" id="Search" style='border-radius: 20px; border: 1px solid black;' placeholder="Search for Shirts">
                    <div class="input-group-prepend">
                        <span class="input-group-text border-0" style='border-radius: 0;'><i class='fa fa-search'></i></span>
                    </div>

                </div>
            </form>
        </div>

        <div class="container-fluid mt-1">
            <div class="row" id='filters'>
                <div class="col-sm-6">
                    <div class="dropdown">
                        <button type="button" id='filterbtn' class="btn btn-primary dropdown-toggle btn-block" id='sortbtn' style='border-radius: 0px; background: transparent; border: black 1px solid; color:black;' data-toggle="dropdown">
                            <i class='fa fa-filter'></i> Filter
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" id='greater1000' href="filteredproducts.php?flt>1000"> > 1000 </a>
                            <a class="dropdown-item" id='less500' href="filteredproducts.php?flt<500">
                                < 500 </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="dropdown">
                        <button type="button" id='filterbtn' class="btn btn-primary dropdown-toggle btn-block" id='sortbtn' style='border-radius: 0px; background: transparent; border: black 1px solid; color:black;' data-toggle="dropdown">
                            <i class='fa fa-sort'></i> Sort
                        </button>
                        <div class="dropdown-menu p-0" style='width: 5%; overflow-y: auto;'>

                            <a class="nav-link" href="aproducts.php?id=a">A</a>
                            <a class="nav-link" href="aproducts.php?id=b">B</a>
                            <a class="nav-link" href="aproducts.php?id=c">C</a>
                            <a class="nav-link" href="aproducts.php?id=d">D</a>
                            <a class="nav-link" href="aproducts.php?id=f">F</a>
                            <a class="nav-link" href="aproducts.php?id=g">G</a>
                            <a class="nav-link" href="aproducts.php?id=h">H</a>
                            <a class="nav-link" href="aproducts.php?id=i">I</a>
                            <a class="nav-link" href="aproducts.php?id=j">J</a>
                            <a class="nav-link" href="aproducts.php?id=e">E</a>
                            <a class="nav-link" href="aproducts.php?id=k">K</a>
                            <a class="nav-link" href="aproducts.php?id=l">L</a>
                            <a class="nav-link" href="aproducts.php?id=m">M</a>
                            <a class="nav-link" href="aproducts.php?id=n">N</a>
                            <a class="nav-link" href="aproducts.php?id=o">O</a>
                            <a class="nav-link" href="aproducts.php?id=p">P</a>
                            <a class="nav-link" href="aproducts.php?id=q">Q</a>
                            <a class="nav-link" href="aproducts.php?id=r">R</a>
                            <a class="nav-link" href="aproducts.php?id=s">S</a>
                            <a class="nav-link" href="aproducts.php?id=t">T</a>
                            <a class="nav-link" href="aproducts.php?id=u">U</a>
                            <a class="nav-link" href="aproducts.php?id=v">V</a>
                            <a class="nav-link" href="aproducts.php?id=w">W</a>
                            <a class="nav-link" href="aproducts.php?id=x">X</a>
                            <a class="nav-link" href="aproducts.php?id=y">Y</a>
                            <a class="nav-link" href="aproducts.php?id=z">Z</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-flex p-sm-5">
            <div class="row mt-5" id='olddata'>

                <?php
                include 'connection.php';
                $query = mysqli_query($conn, "SELECT * FROM `womensproduct`");
                while ($row = mysqli_fetch_assoc($query)) {
                    $id = $row['id'];
                    // echo "<pre>";
                    // print_r($row);
                    // echo "</pre>";

                ?>

                    <div class="col-md-3">

                        <div class="card" style='background-color: #e9eef2;'>
                            <a href="" style='color: red; font-size: 30px;'><i class='fa fa-heart' style='position: absolute ; left: 20px; top: 20px;'></i></a>
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

            <div class="row" id="searchresult" style="display: none;">

            </div>
        </div>



        <script>
            $(document).ready(function() {
                $("#Search").keyup(function() {
                    var value = $(this).val();
                    if (value != "") {
                        $.ajax({

                            url: "ajaxdata.php",
                            method: "POST",
                            data: {
                                value: value
                            },
                            success: function(data) {
                                $("#searchresult").html(data);
                                $("#searchresult").show();
                                $("#olddata").hide();

                            }

                        });
                    } else {
                        $("#newdata").hide();
                        $("#olddata").show();
                    }
                })
            });
        </script>


        <!-- <div class="container p-5"> -->

        <!-- <ul class="pagination "> -->
        <!-- <li class="row pages"> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=a">A</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=b">B</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aroducts.php?id=c">C</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=d">D</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=f">F</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=g">G</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=h">H</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=i">I</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=j">J</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=e">E</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=k">K</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=l">L</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=m">M</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=n">N</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=o">O</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=p">P</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=q">Q</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=r">R</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=s">S</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=t">T</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=u">U</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=v">V</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=w">W</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=x">X</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=y">Y</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="aproducts.php?id=z">Z</a></li> -->
        <!-- <li class="page-item"><a class="page-link" href="#">All Categories</a></div> -->




        <!-- </li> -->
        <!-- </ul> -->

        <!-- </div> -->

        <div class="container mt-5 p-5">

            <ul class="pagination justify-content-center">
                <!-- <li class="page-item "><a class="page-link text-white shadow-lg" style='background: indigo; border-radius: 0;' href="#">Previous</a></li> -->
                <li class="page-item"><a class="page-link text-white shadow-lg" style='background: indigo; border-radius: 0;' href="#">1</a></li>
                <li class="page-item"><a class="page-link text-white shadow-lg" style='background: indigo; border-radius: 0;' href="#">2</a></li>
                <li class="page-item"><a class="page-link text-white shadow-lg" style='background: indigo; border-radius: 0;' href="#">3</a></li>
                <li class="page-item"><a class="page-link text-white shadow-lg" style='background: indigo; border-radius: 0;' href="#">Next</a></li>
            </ul>
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
                    <div class="container">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    </body>

    </html>

<?php } ?>
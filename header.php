 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Header</title>
     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 </head>

 <body>

     <!-- MOBILE NAV   -->
     <div class="offcanvas offcanvas-start" id="demo">
         <div class="offcanvas-header">
             <!-- <h6 class="offcanvas-title">Heading</h6> -->
             <button type="button" id='btnclose' class="btn-close" data-bs-dismiss="offcanvas"></button>
         </div>
         <div class="offcanvas-body">

             <ul class="nav d-inline">
                 <li class="nav-item">
                     <a class="nav-link" style='color:black;' href="#">Home</a>
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
                 <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="#">Home</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="#">Contact Us</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="#">Shop</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" style='color:black; font-size:15px; font-weight:350;' href="login.php">Login</a>

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
                 <a class="nav-link" style='color:black;' data-toggle='' toggle-data='' href="#"><i class='fa fa-shopping-bag'></i> </a>
             </li>
         </ul>


     </div>

     <!-- DESKTOP NAV END   -->

 </body>

 </html>
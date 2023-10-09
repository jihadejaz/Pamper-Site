 <!doctype html>
 <html lang="en">

 <head>
     <title>Title</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS v5.2.1 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

 </head>

 <body>

     <div class="container mt-5">
         <h4 class="text-center">Welcome to PDF example</h4>
         <p class="text-center">Please fill the details before</p>

         <div class="col-md-6 offset-md-3">
             <form method="POST" class="form" action="pdf.php">
                 <label class="form-label" for="username">Name</label><br>
                 <input class="form-control" name="username" type="text" required><br>
                 <label class="form-label" for="usermail">Email</label><br>
                 <input class="form-control" name="usermail" type="text" required><br>
                 <label class="form-label" for="residence">Residence</label><br>
                 <input class="form-control" name="residence" type="text" required><br>
                 <label class="form-label" for="yourstory">Your Story</label><br>
                 <textarea class="form-control" name="yourstory" rows="5" required></textarea>
                 <div class="d-grid gap-2 col-6 mx-auto mt-5">
                     <button type="submit" class="btn btn-primary btn-block">Download PDF</button>
                 </div>
             </form>

         </div>
     </div>


     <!-- Bootstrap JavaScript Libraries -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
     </script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
     </script>
 </body>

 </html>
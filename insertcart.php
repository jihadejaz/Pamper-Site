<?php
session_start();
include 'connection.php';

if (!isset($_SESSION['useremail'])) {
    // ini_set('error_reporting', 0);
} else {
    if (isset($_POST['insertcart'])) {
        $email1 = $_POST['email'];
        $price = $_POST['pprice'];
        $name1 = $_POST['namee'];
        $size = $_POST['size'];
        $quantity = $_POST['qty'];
        $image = $_FILES['image']['name']; // Get the name of the uploaded image
        $image_tmp = $_FILES['image']['tmp_name']; // Get the temporary location of the uploaded image

        // Move the uploaded image to a folder on the server
        move_uploaded_file($image_tmp, "images/" . $image);

        // Construct the image path to be stored in the database
        $image_path = "images/" . $image;

        $product = array($name1, $size, $quantity, $email1, $price, $image_path);

        $query = "INSERT INTO `cartitem`(`size`, `quantity`, `product_name`, `email`, `product_price`, `product_image`) VALUES ('$size', '$quantity', '$name1', '$email1', '$price', '$image_path')";

        $result = mysqli_query($conn, $query);
        
        $_SESSION[$name1] = $product;

        if ($result) {
            echo "<script>
            alert('item added');
            </script>";
            header("location: viewcart.php");
        } else {
            echo "<script>
            alert('error adding');
            </script>";
        }
    }
}
?>

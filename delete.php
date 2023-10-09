<?php
include 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM `babyproducts` WHERE id=$id";
    $result = mysqli_query($conn, $query);



    if ($result) {
        echo "deleted";
    } else {
        die("error deleting");
    }
} else if (isset($_GET['dltuser'])) {

    $id = $_GET['dltuser'];

    $query = "DELETE FROM `loggedusers` WHERE id = $id";
    $result = mysqli_query($conn, $query); 

    // echo $id;

    if ($result) {
        echo "<script>;
        window.location.href='usersrecord.php';
        </script>";
    } else {
        die("error deleting");
    }
}else if(isset($_GET['dltrecord'])) {

    $id = $_GET['dltrecord'];

    $query = "DELETE FROM `pampers` WHERE id = $id";
    $result = mysqli_query($conn, $query); 

    // echo $id;

    if ($result) {
        echo "<script>;
        window.location.href='myorders.php';
        </script>";
    } else {
        die("error deleting");
    }
}


else if(isset($_GET['clcorder'])) {

    $id = $_GET['clcorder'];

    $query = "DELETE FROM `pampers` WHERE id = $id";
    $result = mysqli_query($conn, $query); 

    // echo $id;

    if ($result) {
        echo "<script>;
        alert('Order has been canceled');
        window.location.href='userorders.php';
        
        </script>";
    } else {
        die("error deleting");
    }
}

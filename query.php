<?php
include "connection.php";

if (isset($_REQUEST['savedata'])) {
    $uname = $_REQUEST['uname'];
    $ucontact = $_REQUEST['ucontact'];
    $uaddress = $_REQUEST['uaddress'];
    $email = $_REQUEST['uemail'];
    $smallsize = $_REQUEST['ss'];
    $mediumsize = $_REQUEST['ms'];
    $largesize = $_REQUEST['ls'];
    $pateintsize = $_REQUEST['ps'];

    $query = "INSERT INTO `pampers` (`user_name`, `user_contact`, `user_address`, `small_size`, `medium_size`, `large_size`, `patient_size`,`email`) VALUES ('$uname','$ucontact','$uaddress','$smallsize','$mediumsize','$largesize','$pateintsize','$email')";

    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    header("location: home.php?msg=Shukria Order k liye");


}
?>
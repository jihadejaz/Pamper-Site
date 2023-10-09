<?php

require_once __DIR__ . '/vendor/autoload.php';
header("Content-Type: application/octet-stream");
header('Content-Disposition: attachment; filename="downloaded.pdf"');
header("Content-Length: " . filesize("download.pdf"));
readfile('original.pdf');

$file = $_GET["file"] . ".pdf";

$mpdf = new \Mpdf\Mpdf();


$username=$_POST['username'];
$usermail=$_POST['usermail'];
$residence=$_POST['residence'];
$userstory=$_POST['yourstory'];
$infor ='';

$infor .='<h2>Details</h2>';

$infor .='<strong>Username: </strong>' . $username . '<br/>';
$infor .='<strong>Email: </strong>' . $usermail .'<br/>';
$infor .='<strong>Residence: </strong>' . $residence .'<br/>';
$infor .='<strong>Testimonial: </strong>' . $userstory .'<br/>';

$mpdf->WriteHTML($infor);
$mpdf->Output();


?>
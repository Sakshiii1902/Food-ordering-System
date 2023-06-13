<?php

include("connection.php");

$fullname = $_POST['fname'];
$mail = $_POST['email'];
$phone = $_POST['phone'];
$pwd = $_POST['password'];
$cwd = $_POST['conpassword'];

$query = "INSERT INTO `form`(`fullname`, `email`, `phone`, `Crpass`, `repass`) VALUES ('$fullname','$mail','$phone','$pwd','$cwd')";

$data = mysqli_query($conn, $query);

if ($data) {
    // echo "Data Inserted into Database";
    header("Location: http://localhost/food-ordermain/food-order/admin/login.php");
} else {
    echo "failed";
}
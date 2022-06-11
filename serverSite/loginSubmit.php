<?php

include 'config.php';

session_start();

$email = $_REQUEST["loginEmail"];
$pass = $_REQUEST["loginPassword"];

$sql = "SELECT * FROM `user_info` WHERE u_email = '$email' and u_pass = '$pass'";
$result = mysqli_query($connection, $sql);

if (isset($_SESSION['user_email'])) {
    echo "<script>location.href='../clientSite/home.php'</script>";
}

if (mysqli_num_rows($result)) {
    echo "<script>alert('Login Successfully!!..')</script>";
    $_SESSION['user_email'] = $email;
    echo "<script>location.href='../clientSite/home.php'</script>";
} else {
    echo "<script>alert('Login Failed!!..')</script>";
    echo "<script>location.href='../clientSite/loginRegistration/login.php'</script>";
}

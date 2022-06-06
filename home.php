<?php

session_start();

$useremail = "admin@gmail.com";
$usrpass = "123";

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['password'];

if (isset($_SESSION['useremail'])) {
    echo "$name <br>";
    echo "<h1>" . $_SESSION['useremail'] . "</h1><br>";
    echo "$pass <br>";
    echo "<a href='logout.php'><input type='button' value='Logout' name='logout'></a>";
} else {
    if ($useremail == $email && $usrpass == $pass) {
        $_SESSION['useremail'] = $email;
        echo "<script>alert('valid user!!')</script>";
        echo "<script>location.href='home.php'</script>";
    } else {
        echo "<script>alert('Invalid user!!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
}

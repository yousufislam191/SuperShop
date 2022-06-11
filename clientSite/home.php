<?php

session_start();

if (isset($_SESSION['user_email'])) {
    echo "$email <br>";
    echo "<h1>" . $_SESSION['user_email'] . "</h1><br>";
    echo "$pass <br>";
    echo "Home Page";
    echo "<a href='loginRegistration/logout.php'><input type='button' value='Logout' name='logout'></a>";
} else {
    echo "<script>alert('you can't access through url!!')</script>";
    echo "<script>location.href='login.php'</script>";
}

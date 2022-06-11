<?php

session_start();

if (isset($_SESSION['user_email'])) {
    session_destroy();
    echo "<script>location.href='login.php'</script>";
} else {
    echo "<script>alert('you can't access through url!!')</script>";
    echo "<script>location.href='login.php'</script>";
}

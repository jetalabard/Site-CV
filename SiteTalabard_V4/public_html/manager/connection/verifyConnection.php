<?php

session_start();
if ($page == "admin") {
    if (!isset($_SESSION['login_user'])) {
        header("location: ../../connection.php");
    }
} else {
    if (!isset($_SESSION['login_user'])) {
        header("location: connection.php");
    }
}
?>
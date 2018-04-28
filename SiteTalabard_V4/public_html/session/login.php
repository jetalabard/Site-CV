<?php

session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Identifiant ou mot de passe invalide";
    } else {
// Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

        $config = parse_ini_file('./db/config.ini');
        $dbh = new PDO("mysql:host=" . $config['dbHost'] . ";dbname=" . $config['dbName'], $config['username'], $config['password']);
        $dbh->exec("set names utf8");
        $sql = "select * from user where password='$password' AND id='$username'";
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        // SQL query to fetch information of registerd users and finds user match.
        $count = $stmt->rowCount();

        if ($count == 1) {
            $_SESSION['login_user'] = $username; // Initializing Session
            header("location: admin.php"); // Redirecting To Other Page
        } else {
            $error = "Identifiant ou mot de passe invalide";
        }
        mysql_close($connection); // Closing Connection
    }
}
?>
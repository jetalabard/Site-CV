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

        $db_name = 'postlzhc';
        $hostname = 'sql2.olympe.in';
        $id = 'postlzhc';
        $pass = '9*65C08ab';
        $connection = mysql_connect($hostname, $id, $pass);
// To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
// Selecting Database
        $db = mysql_select_db($db_name, $connection);
// SQL query to fetch information of registerd users and finds user match.
        $query = mysql_query("select * from user where password='$password' AND id='$username'", $connection);
        $rows = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $username; // Initializing Session
            header("location: admin.php"); // Redirecting To Other Page
        } else {
            $error = "Identifiant ou mot de passe invalide";
        }
        mysql_close($connection); // Closing Connection
    }
}
?>
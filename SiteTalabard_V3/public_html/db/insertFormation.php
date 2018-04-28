<?php

if (isset($_POST["submit"])) {
    $db_name = 'postlzhc';
    $hostname = 'sql2.olympe.in';
    $username = 'postlzhc';
    $password = '9*65C08ab';

    $title = $_POST["title"];
    $subtitle = $_POST["subtitle"];
    $image = $_POST["image"];
    $date = $_POST["date"];
    $resume = $_POST["resume"];

    $link = mysql_connect($hostname, $username, $password);
    mysql_select_db($db_name);
    
    $sql = "INSERT INTO links values(DEFAULT)";
    mysql_query($sql);

    $sql = "INSERT INTO formation (title,photo,subtitle,dateF,resume,idlinks) VALUES ('" . $title . "','".$image."','".$subtitle."','".$date."','".$resume."','".mysql_insert_id()."')";
    mysql_query($sql);
    mysql_close();
    header("location: ../admin.php");
} else {
    header("location: ../form/pageFormFormation.php");
}
?>
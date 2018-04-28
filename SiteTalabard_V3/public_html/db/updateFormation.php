<?php

if (isset($_POST["submit"])) {
    $db_name = 'postlzhc';
    $hostname = 'sql2.olympe.in';
    $username = 'postlzhc';
    $password = '9*65C08ab';

    $id = $_POST["id"];
    $title = $_POST["title"];
    $subtitle = $_POST["subtitle"];
    $image = $_POST["image"];
    $date = $_POST["date"];
    $resume = $_POST["resume"];

    $link = mysql_connect($hostname, $username, $password);
    mysql_select_db($db_name);
    

    $sql = "UPDATE formation SET title='" . $title . "',image='".$image."',subtitle='".$subtitle."',date='".$date."',resume='".$resume."' where id=";
    mysql_query($sql);
    mysql_close();
    header("location: ../admin.php");
} else {
    header("location: ../form/pageFormFormation.php");
}
?>
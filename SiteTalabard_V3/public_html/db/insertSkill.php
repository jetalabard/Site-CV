<?php

if (isset($_POST["submit"])) {
    $db_name = 'postlzhc';
    $hostname = 'sql2.olympe.in';
    $username = 'postlzhc';
    $password = '9*65C08ab';

    $name = $_POST["name"];
    $type = $_POST["type"];
    $image = $_POST["image"];

    $link = mysql_connect($hostname, $username, $password);
    mysql_select_db($db_name);
    
    $sql = "INSERT INTO competence (name,type,image) VALUES ('" . $name . "','".$type."','".$image."')";
    mysql_query($sql);
    mysql_close();
    header("location: ../admin.php");
} else {
    header("location: ../form/pageFormSkill.php");
}
?>
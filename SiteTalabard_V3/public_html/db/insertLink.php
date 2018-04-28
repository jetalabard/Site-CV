<?php

if (isset($_POST["submit"])) {
    $db_name = 'postlzhc';
    $hostname = 'sql2.olympe.in';
    $username = 'postlzhc';
    $password = '9*65C08ab';

    $libl = $_POST["libl"];
    $link = $_POST["link"];
    $libllink = $_POST["libllink"];
    $idlinks = $_POST["item"];
    $url = $_POST["url"];
    $important = $_POST["important"];

    $link = mysql_connect($hostname, $username, $password);
    mysql_select_db($db_name);
    
    $sql = "INSERT INTO link (idLinks,libl,link,libllink,url,importance) "
            . "VALUES (" . $idlinks . ",'".$libl."','".$link."','".$libllink."',".$url.",".$important.")";
    mysql_query($sql);
    mysql_close();
    header("location: ../admin.php");
} else {
    header("location: ../form/pageFormLink.php");
}
?>
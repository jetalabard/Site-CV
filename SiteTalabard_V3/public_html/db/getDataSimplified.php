<?php
header('Content-Type: application/json');

if (isset($_POST['table']) && !empty($_POST['table'])) {
    $db_name = 'postlzhc';
    $hostname = 'sql2.olympe.in';
    $username = 'postlzhc';
    $password = '9*65C08ab';

    $dbh = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);
    $dbh->exec("set names utf8");
    $sql = 'SELECT title,idlinks FROM '.$_POST['table'];
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
}
else{
    $json ="{}";  
}
echo $json;

?>
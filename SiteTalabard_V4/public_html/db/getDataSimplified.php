<?php

header('Content-Type: application/json');

if (isset($_POST['table']) && !empty($_POST['table'])) {
    include 'db.php';
    $dbh = Database::connect();
    $dbh->exec("set names utf8");
    $sql = 'SELECT title,idlinks FROM ' . $_POST['table'] . ' ORDER BY id DESC';
    ;
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($result);
    Database::disconnect();
}
else{
    $json ="{}";  
}
echo $json;

?>
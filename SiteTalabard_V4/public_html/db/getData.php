<?php

header('Content-Type: application/json');

if (isset($_POST['table']) && !empty($_POST['table'])) {
    try {
        include 'db.php';
        $dbh = Database::connect();

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->exec("set names utf8");
        $sql = 'SELECT * FROM '.$_POST['table'].' ORDER BY ID DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($result);
        Database::disconnect();
    } catch (PDOException $e) {
        Database::disconnect();
    }


    
} else {
    $json = "{}";
}
echo $json;
?>
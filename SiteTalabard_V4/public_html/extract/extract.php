<?php
header('Content-type: application/json;charset=utf-8');

include_once('../db/db.php');

if (isset($_GET['table']) && !empty($_GET['table'])) {
    try {
        $dbh = Database::connect();
        $sql = 'SELECT * FROM ' . $_GET['table'] . ' ORDER BY ID DESC';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $json = json_encode($result, JSON_PRETTY_PRINT);
        echo unicode_decode($json);
        Database::disconnect();
    } catch (PDOException $e) {
        Database::disconnect();
        $json = "{}";
    }
    exit;
}


function replace_unicode_escape_sequence($match) {
    return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
}
function unicode_decode($str) {
    return preg_replace_callback('/\\\\u([0-9a-f]{4})/i', 'replace_unicode_escape_sequence', $str);
}

?>


<?php

class Database {

    private static $link = null;

    public static function connect() {
        if (self :: $link) {
            return self :: $link;
        }

        $config = parse_ini_file('config.ini');
        try {
            self :: $link = new PDO("mysql:host=" . $config['dbHost'] . ";dbname=" . $config['dbName'], $config['username'], $config['password']);

            
        } catch (PDOException $e) {
            self :: $link = null;
        }
        return self::$link;
    }

    public static function disconnect() {
        self :: $link = null;
    }

}

?>
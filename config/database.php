<?php
class Database {
    public static function connect() {
        return new PDO(
            "mysql:host=localhost;dbname=task_manager",
            "root",
            "",
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    }
}

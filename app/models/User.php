<?php
require_once __DIR__ . '/../../config/database.php';

class User {
    public static function create($name, $email, $password) {
        $db = Database::connect();
        $stmt = $db->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        return $stmt->execute([$name, $email, password_hash($password, PASSWORD_DEFAULT)]);
    }

    public static function findByEmail($email) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }
}

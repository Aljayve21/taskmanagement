<?php
session_start();
require_once __DIR__ . '/../models/User.php';

class AuthController {

    public function register() {
        if ($_POST) {
            if (empty($_POST['email']) || empty($_POST['password'])) {
                die("All fields required");
            }

            User::create(
                $_POST['name'],
                $_POST['email'],
                $_POST['password']
            );

            header("Location: index.php?action=login");
        }
        require_once __DIR__ . '/../views/auth/register.php';
    }

    public function login() {
        if ($_POST) {
            $user = User::findByEmail($_POST['email']);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                header("Location: index.php?action=tasks");
            } else {
                echo "Invalid login";
            }
        }
        require_once __DIR__ . '/../views/auth/login.php';
    }
}

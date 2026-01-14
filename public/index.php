<?php
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/TaskController.php';

$action = $_GET['action'] ?? 'login';

$auth = new AuthController();
$task = new TaskController();

switch ($action) {
    case 'register': $auth->register(); break;
    case 'login': $auth->login(); break;
    case 'tasks': $task->index(); break;
    case 'edit-task': $task->edit(); break;
    case 'create-task': $task->create(); break;
    case 'delete-task': $task->delete(); break;
}

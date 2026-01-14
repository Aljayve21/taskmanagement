<?php

require_once __DIR__ . '/../models/Task.php';

class TaskController
{

    private function authCheck()
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location: index.php?action=login");
            exit;
        }
    }

    public function index()
    {
        $this->authCheck();
        $tasks = Task::all($_SESSION['user_id']);
        require __DIR__ . '/../views/tasks/index.php';
    }

    public function create()
    {
        $this->authCheck();
        if ($_POST) {
            Task::create(
                $_SESSION['user_id'],
                $_POST['title'],
                $_POST['description']
            );
            header("Location: index.php?action=tasks");
        }
        require __DIR__ . '/../views/tasks/create.php';
    }

    public function edit()
    {
        $this->authCheck();

        $task = Task::find($_GET['id'], $_SESSION['user_id']);
        if (!$task) {
            die("Task not found");
        }

        if ($_POST) {
            Task::update(
                $_GET['id'],
                $_SESSION['user_id'],
                $_POST['title'],
                $_POST['description'],
                $_POST['status']
            );
            header("Location: index.php?action=tasks");
        }

        require __DIR__ . '/../views/tasks/edit.php';
    }


    public function delete()
    {
        $this->authCheck();
        Task::delete($_GET['id'], $_SESSION['user_id']);
        header("Location: index.php?action=tasks");
    }
}

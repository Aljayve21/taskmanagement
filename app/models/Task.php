<?php
require_once __DIR__ . '/../../config/database.php';

class Task
{

    public static function all($user_id)
    {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM tasks WHERE user_id = ?");
        $stmt->execute([$user_id]);
        return $stmt->fetchAll();
    }

    public static function create($user_id, $title, $description)
    {
        $db = Database::connect();
        $stmt = $db->prepare(
            "INSERT INTO tasks (user_id, title, description) VALUES (?, ?, ?)"
        );
        $stmt->execute([$user_id, $title, $description]);
    }

    public static function delete($id, $user_id)
    {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM tasks WHERE id = ? AND user_id = ?");
        $stmt->execute([$id, $user_id]);
    }

    public static function find($id, $user_id)
    {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM tasks WHERE id = ? AND user_id = ?");
        $stmt->execute([$id, $user_id]);
        return $stmt->fetch();
    }

    public static function update($id, $user_id, $title, $description, $status)
    {
        $db = Database::connect();
        $stmt = $db->prepare(
            "UPDATE tasks SET title=?, description=?, status=? WHERE id=? AND user_id=?"
        );
        $stmt->execute([$title, $description, $status, $id, $user_id]);
    }
}

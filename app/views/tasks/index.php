<?php require __DIR__ . '/../layouts/header.php'; ?>

<div class="d-flex justify-content-between mb-3">
  <h3>My Tasks</h3>
  <a href="index.php?action=create-task" class="btn btn-primary">Add Task</a>
</div>

<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>Title</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tasks as $task): ?>
      <tr>
        <td><?= htmlspecialchars($task['title']) ?></td>
        <td><?= $task['status'] ?></td>
        <td>
          <a href="index.php?action=edit-task&id=<?= $task['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="index.php?action=delete-task&id=<?= $task['id'] ?>"
             class="btn btn-danger btn-sm"
             onclick="return confirm('Delete this task?')">
             Delete
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php require __DIR__ . '/../layouts/footer.php'; ?>

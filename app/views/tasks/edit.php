<?php require __DIR__ . '/../layouts/header.php'; ?>

<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow">
      <div class="card-body">

        <h4 class="mb-3 text-center">Edit Task</h4>

        <form method="POST">
          <div class="mb-3">
            <label class="form-label">Title</label>
            <input
              type="text"
              name="title"
              class="form-control"
              value="<?= htmlspecialchars($task['title']) ?>"
              required
            >
          </div>

          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea
              name="description"
              class="form-control"
              rows="4"
              required
            ><?= htmlspecialchars($task['description']) ?></textarea>
          </div>

          <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" class="form-select">
              <option value="Pending" <?= $task['status']=='Pending' ? 'selected' : '' ?>>
                Pending
              </option>
              <option value="Completed" <?= $task['status']=='Completed' ? 'selected' : '' ?>>
                Completed
              </option>
            </select>
          </div>

          <div class="d-flex justify-content-between">
            <a href="index.php?action=tasks" class="btn btn-secondary">
              Back
            </a>
            <button type="submit" class="btn btn-success">
              Update Task
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<?php require __DIR__ . '/../layouts/footer.php'; ?>

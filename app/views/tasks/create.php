<?php require __DIR__ . '/../layouts/header.php'; ?>

<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow">
      <div class="card-body">

        <h4 class="mb-3 text-center">Create Task</h4>

        <form method="POST">
          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
          </div>

          <div class="d-flex justify-content-between">
            <a href="index.php?action=tasks" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Save Task</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<?php require __DIR__ . '/../layouts/footer.php'; ?>

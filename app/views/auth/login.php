<?php require __DIR__ . '/../layouts/header.php'; ?>

<div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card shadow">
      <div class="card-body">
        <h4 class="text-center mb-3">Login</h4>

        <form method="POST">
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>

          <button class="btn btn-primary w-100">Login</button>
        </form>

        <div class="text-center mt-3">
          <a href="index.php?action=register">Create account</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require __DIR__ . '/../layouts/footer.php'; ?>

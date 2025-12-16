<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    ?>

    <!-- Giao diện Welcome -->
    <div class="card shadow p-5 text-center" style="width: 450px;">
      <h2 class="text-success mb-4">
        Welcome, <span class="fw-bold"><?php echo $username; ?></span> 🎉
      </h2>
      <!-- Ảnh welcome -->
      <img src="welcome.png" alt="Welcome Home" class="img-fluid rounded">
    </div>

<?php
} else {
    ?>

    <!-- Form Login -->
    <div class="card shadow p-4" style="width: 350px;">
      <h3 class="text-center mb-4">Login</h3>
      <form method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-warning w-100 rounded-pill">Submit</button>
      </form>
    </div>

<?php
}
?>

</body>
</html>

<?php
$id = isset($_GET['id']) ? $_GET['id'] : "";

// Kiểm tra ID có tồn tại không
if (empty($id)) {
    echo "<div class='alert alert-warning'>Thiếu ID người dùng.</div>";
    exit;
}

// Lấy dữ liệu từ database
require_once "db.php";
$db = new DbHelper();

$sql = "SELECT name, email FROM users WHERE id = ?";
$st = $db->select($sql, [$id], true);

// Kiểm tra có dữ liệu trả về không
if (empty($st)) {
    echo "<div class='alert alert-danger'>Không tìm thấy người dùng với ID = {$id}</div>";
    exit;
}

$user = $st[0]; // Lúc này chắc chắn có phần tử 0
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Update User</title>
</head>

<body>
    <div class="container">
        <div class="row border justify-item-center shadow p-4 mt-4">
            <form method="post" action="edituser.php?id=<?php echo htmlspecialchars($id); ?>"> 
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" 
                           value="<?php echo htmlspecialchars($user->name); ?>" disabled />
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" id="email" name="email" class="form-control" 
                           value="<?php echo htmlspecialchars($user->email); ?>" />
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-sm btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang = "vi">
<head>
    <meta charset="utf-8">
    <title>Chào mừng bạn đến với lớp học</title>
    <style>
        .error{
            color: red;
        }
        b{
            color:green;
        }
    </style>
</head>
<body>
<?php
    $username = $email = "";
    $nameerr = $emailerr = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['username'])) {
            $nameerr = "* Tên người dùng là bắt buộc";
        } else {
            $username = htmlspecialchars($_POST['username']);
        }

        if (empty($_POST['email'])) {
            $emailerr = "* Email là bắt buộc";
        } else {
            $email = htmlspecialchars($_POST['email']);
        }
    }
?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Username
        <input type='text' name='username' value='<?php echo htmlspecialchars($username); ?>'>
        <span class="error"><?php echo $nameerr; ?></span>
        <br><br>
        Email
        <input type='text' name='email' value='<?php echo htmlspecialchars($email); ?>'>
        <span class="error"><?php echo $emailerr; ?></span>
        <br><br>
        <input type='submit' value='submit'>
    </form>
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST" && empty($nameerr) && empty($emailerr)) {
        echo "Tên người dùng của bạn: <b>" . $username . "</b><br>";
        echo "Email của bạn: <b>" . $email . "</b><br>";
    }
?>
</body>
</html>
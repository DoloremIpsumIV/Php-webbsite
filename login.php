<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    // Example login validation
    if ($name === 'admin' && $password === 'password123') {
        $_SESSION['user'] = $name;
    } else {
        $error = "Invalid credentials!";
    }
}
if (isset($_SESSION['user'])) {
    header("location: index.php");
    exit();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <p>Du är inte inloggad</p>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Log In">
    </form>
</body>

</html>
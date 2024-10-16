<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location: login.php");
    exit();
}
$user = $_SESSION['user'];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <p>Du är inloggad som <?php echo htmlspecialchars($user); ?></p> <!-- htmlspecialchars to prevent XSS -->
    <br>
    <a href="logout.php">Logga ut</a>
</body>

</html>
<?php  
session_start();
    $user = $_SESSION['user'] = $_POST['name'];
    if (empty($user)) {
        header("location: login.php");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Du är inloggad som <?php echo $user;  ?> </p>
    <br>
    <a href="logout.php">Logga ut</a>

</body>
</html>
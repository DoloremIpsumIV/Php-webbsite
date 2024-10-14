<?php 
    if (isset($_SESSION['user'])) {
        header("location: index.php");
    }
    else {
        echo "not logged in";
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Du är inte inloggad </p>
    <form action="index.php" method="POST">
        <input type="text" name="name"> 

        </input>
        <input type="password" name="password"> 

        </input>
        <input type="submit">
    </form>
</body>
</html>
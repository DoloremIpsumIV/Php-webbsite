<?php
require_once "user.php";
require_once "users.php";

$greg = new Users();
$jeff = new User();

echo $greg->scream();
echo $jeff->scream();
echo $jeff->contemplation();
?>
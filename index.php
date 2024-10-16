<?php
require_once "user.php";
require_once "users.php";

$greg = new Users();
echo gettype($greg->find("Tom", "Password231"));
?>
<?php
require '../class/user.php';

$user = new User();//instantiation

$username = $_POST["username"];
$password = $_POST["password"];

//call login() from object $user
$user->login($username,$password);
?>
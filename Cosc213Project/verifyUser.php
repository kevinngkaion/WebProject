<?php
session_start();
$username = filter_input(INPUT_POST, "username",);
$password = filter_input(INPUT_POST, "password");
$link = mysqli_connect("localhost", "213admin", "password", "213project");
$sql = "SELECT `id`, `is_admin` FROM `auth_users` WHERE username = '{$username}' AND password = SHA1('{$password}');";
$result = mysqli_query($link, $sql);
if ($resultAssoc = mysqli_fetch_assoc($result)){
    $id = $resultAssoc['id'];
    $isAdmin = $resultAssoc['is_admin'];

    $_SESSION['id'] = $id;
    $_SESSION['isAdmin'] = $isAdmin;
    header("location: home.php");
} else{
    header("location: login.php");
}
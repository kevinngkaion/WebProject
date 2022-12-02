<?php
session_start();
$username = filter_input(INPUT_POST, "username",);
$password = filter_input(INPUT_POST, "password");
$link = mysqli_connect("localhost", "213admin", "password", "213project");
$sql = "select * from `auth_users` where username = '{$username}' and password = SHA1('{$password}');";
$result = mysqli_query($link, $sql);
if ($resultAssoc = mysqli_fetch_assoc($result)){
    $id = $resultAssoc['id'];
    $account_type = $resultAssoc['account_type'];
    $isadmin = $resultAssoc['is_admin'];
    $_SESSION['id'] = $id;
    $_SESSION['accountType'] = $id;
    $_SESSION['isAdmin'] = $isAdmin;
    header("location: home.php");
} else{
    header("location: login.html");
}
<?php
session_start();
if(!$_SESSION['id']){
    header("location: index.php");
} else {
    $userID = $_SESSION['id'];
    // check if user is admin
    if($_SESSION['isAdmin'] == 1){
        $isAdmin = true;
    } else {
        $isAdmin = false;
    }
    // get POST data
    $id = filter_input(INPUT_POST, 'id');
     // connect to db and query name info on the people
    $link = mysqli_connect("localhost", "213admin", "password", "213project");
    $sql = "SELECT * FROM person WHERE id={$id};";
    if($result = mysqli_query($link, $sql)){
        $resultAssoc = mysqli_fetch_assoc($result);
        $fname = $resultAssoc['fname'];
        $lname = $resultAssoc['lname'];
        $id = $resultAssoc['id'];
        $username = str_replace(' ', '', $fname).$lname;
        $password = $lname.$resultAssoc['id'];
        $sql = "INSERT INTO auth_users VALUES($id, '$username', SHA1('$password'), false);";
        if(mysqli_query($link, $sql)){
            echo "You have successfully created an account for {$fname} {$lname}\n";
            echo "username: {$username}\npassword: {$password}";
        }
    }
}
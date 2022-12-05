<?php
session_start();
if(!$_SESSION['id']){
    header("location: index.php");
} else {
    $userID = $_SESSION['id'];
    // check if user is admin
    if($_SESSION['isAdmin'] == 1){
        // get POST data
        $stuID = filter_input(INPUT_POST, 'studentID');
        $newStatus = filter_input(INPUT_POST, 'newStatus');
        // connect to db and query all info on the potential students
        $link = mysqli_connect("localhost", "213admin", "password", "213project");
        $sql = "UPDATE student SET status = '{$newStatus}' WHERE id = {$stuID};";
        if(mysqli_query($link, $sql)){
            echo "You have set the status for Student with ID {$stuID} to {$newStatus}";
        }
    } else {
        echo "You do not have permission to make any changes.";
    }

}
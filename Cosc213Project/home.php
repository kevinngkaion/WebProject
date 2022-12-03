<?php
    session_start();
    // check if user is logged in
    if(!$_SESSION['id']){
        header("location: index.php");
    } else {
        $id = $_SESSION['id'];
        // check if user is admin
        if($_SESSION['isAdmin'] == 1){
            $isAdmin = 'You have admin privilages!';
        } else {
            $isAdmin = 'You DO NOT have admin privilages you puny human';
        }
        $link = mysqli_connect("localhost", "213admin", "password", "213project");
        // query primary info on person
        $sqlPerson = "SELECT * FROM `person` WHERE id = {$id};";
        $result = mysqli_query($link, $sqlPerson);
        // save information into array
        //$personInfoArray = mysqli_fetch_array($result);
        // save information into assoc array instead
        $personInfoAssoc = mysqli_fetch_assoc($result);
        // save info on person into variables
        $type = $personInfoAssoc['type'];
        $lname = $personInfoAssoc['lname'];
        $fname = $personInfoAssoc['fname'];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php'; ?>
        <title>COSC 213 Project: Home</title>
    </head>
    <body>
        <?php include 'navout.php'; ?>
        <div class="container">
            <div class="text-center col mt-5">
                <h1 class="primary">
                    <?php echo "Welcome {$fname} {$lname}!"; ?>
                </h1>
                <h1 class="alert">
                    <?php echo $isAdmin; ?>
                </h1>
            </div>
        </div>
    </body>
</html>
<?php
    session_start();
    $id = $_SESSION['id'];
    if($_SESSION['isAdmin'] == 1){
        $isAdmin = 'You have admin privilages!';
    } else {
        $isAdmin = 'You DO NOT have admin privilages you puny human';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php'; ?>
        <title>COSC 213 Project: Home</title>
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
            <div class="text-center col mt-5">
                <h1 class="primary">
                    <?php echo "Welcome user# {$id}!"; ?>
                </h1>
                <h1 class="alert">
                    <?php echo $isAdmin; ?>
                </h1>
            </div>
        </div>
    </body>
</html>
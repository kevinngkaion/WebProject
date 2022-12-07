<?php
    session_start();
    // check if user is logged in
    if(!$_SESSION['id']){
        header("location: index.php");
    } else {
        $id = $_SESSION['id'];
        // check if user is admin
        $isAdmin = $_SESSION['isAdmin'];
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
        $_SESSION['type'] = $type;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php'; ?>
        <title>COSC 213 Project: Home</title>
    </head>
    <body>
        <?php include 'navout.php';
        if(isSet($_GET['status'])){
            echo "<div class='alert alert-success text-center' role='alert'>You have successfully added a child</div>";
        }
        ?>
        <div class="container">
            <div class="text-center col mt-5">
                <h1 class="primary">
                    <?php echo "Welcome {$fname} {$lname}!"; ?>
                </h1>
            </div>
        </div>

        <div class="container d-flex justify-content-between pt-3">
            <?php
            if (isset($_GET['exists'])){
            echo '<div class="alert alert-danger text-center" role="alert">Sorry. This email already exists. Please try again.</div>';
            }
            if($isAdmin){
                echo "<button class='btn btn-outline-primary' type='button' onclick='showApplications()'>View Pending Registrations</button>";
                echo "<button class='btn btn-outline-danger' type='button' onclick='showCurrentStudents()'>View Current Students</button>";
                echo "<button class='btn btn-outline-warning' type='button' onclick='showExpiredStudents()'>View Inactive Students</button>";
                echo "<button class='btn btn-outline-dark' type='button' onclick='showPeople()'>Create New User</button>";
            }
            if($type == 'coach' && !$isAdmin){
                echo "<button class='btn btn-outline-danger' type='button' onclick='showCurrentStudents()'>View Current Students</button>";
            }
            if($type == 'student'){
                echo "<button class='btn btn-outline-danger' type='button' onclick='showCurrentStudents()'>View Your Information</button>";
            }
            if($type == 'parent'){
                echo "<button class='btn btn-outline-primary' type='button' onclick='showChildren()'>View Children</button>";
                echo "<button class='btn btn-outline-dark' type='button' onclick='registerChild()'>Register Your Child</button>";
            }
            ?>
        </div>

        <div class="container py-3 d-none" id="output">

        </div>
    </body>
</html>
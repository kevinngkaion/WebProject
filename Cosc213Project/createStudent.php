<?php
session_start();
if(!isSet($_SESSION['id'])){
    header('location: index.php?e=unauthorized');
}
if (isset($_POST['submit'])){
    $fname = filter_input(INPUT_POST,'fname');
    $lname = filter_input(INPUT_POST,'lname');
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST,'phone');
    $dob = filter_input(INPUT_POST,'dob');
    $school = filter_input(INPUT_POST,'school');
    $grade = filter_input(INPUT_POST,'grade');
    $program = filter_input(INPUT_POST,'program');
    //connect to db
    $link = mysqli_connect("localhost", "213admin", "password", "213project");
    //check if email already exists
    $sql = "SELECT email FROM person WHERE email = '$email';";
    // $result = mysqli_query($link, $sql);
    // if($row = mysqli_fetch_row($result)){
    //     header('location: home.php?exists=1');
    // }
    //insert person
    $personSQL = "INSERT INTO `person` (type, fname, lname, phone, email) 
                    VALUES ('student', '{$fname}', '{$lname}', '{$phone}', '{$email}');";

    //get their assigned ID
    if(mysqli_query($link, $personSQL)){
        $sql = "SELECT id FROM person WHERE email = '{$email}';";
        $result = mysqli_query($link, $sql); 
        $result_arr = mysqli_fetch_row($result);
        $id = $result_arr[0];
        //insert student info
        $sql = "INSERT INTO `student` (id, dob, school, grade, program_id, status) VALUES ($id, '$dob', '$school', '$grade', '$program', 'pending');";
        if(mysqli_query($link, $sql)){
            //get student and parent IDs
            $sql = "SELECT s.stu_id, p.parent_id FROM student s, parent p WHERE s.id = $id AND p.id = {$_SESSION['id']};";
            $result = mysqli_query($link, $sql);
            if($row = mysqli_fetch_row($result)){
                //insert the student parent pair into stu_par
                $sql = "INSERT INTO stu_par(stu_id, par_id) VALUES ({$row[0]}, {$row[1]});";
                if(mysqli_query($link, $sql)){
                    header('location: home.php?status=success');
                }
            }
        }
    }
}
?>
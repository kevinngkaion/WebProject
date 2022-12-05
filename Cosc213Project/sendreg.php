<?php
if (isset($_POST['submit'])){
    $fname = filter_input(INPUT_POST,'fname');
    $lname = filter_input(INPUT_POST,'lname');
    $semail = filter_input(INPUT_POST,'semail', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST,'phone');
    $dob = filter_input(INPUT_POST,'dob');
    $school = filter_input(INPUT_POST,'school');
    $grade = filter_input(INPUT_POST,'grade');
    $program = filter_input(INPUT_POST,'program');
    $ffname = filter_input(INPUT_POST,'ffname');
    $flname = filter_input(INPUT_POST,'flname');
    $femail = filter_input(INPUT_POST,'femail', FILTER_VALIDATE_EMAIL);
    $fphone = filter_input(INPUT_POST,'fphone');
    $mfname = filter_input(INPUT_POST,'mfname');
    $mlname = filter_input(INPUT_POST,'mlname');
    $memail = filter_input(INPUT_POST,'memail', FILTER_VALIDATE_EMAIL);
    $mphone = filter_input(INPUT_POST,'mphone');
    //connect to db
    $link = mysqli_connect("localhost", "213admin", "password", "213project");
    //get next id value that will be issued
    $idSQL = "SELECT AUTO_INCREMENT FROM information_schema.tables WHERE table_schema = '213project' AND table_name = 'person';";
    $resultRow = mysqli_fetch_row(mysqli_query($link, $idSQL));
    $sID = $resultRow[0];
    $fID = $sID + 1;
    $mID = $fID +1;

    //insert persons
    $personSQL = "INSERT INTO `person` (type, fname, lname, phone, email) 
                    VALUES ('student', '{$fname}', '{$lname}', '{$phone}', '{$semail}'),
                    ('parent', '$ffname', '$flname', '$fphone', '$femail'),
                    ('parent', '$mfname', '$mlname', '$mphone', '$memail');";

    //insert parent info
    $parentSQL = "INSERT INTO `parent` (id, relationship)
                    VALUES ($fID, 'father'),
                    ($mID, 'mother');";
    //insert student info. This needs to be done after parent insert because we need their id as FK
    $studentSQL = "INSERT INTO `student` (id, dob, school, photo, grade, program_id, status, parent1, parent2)
    VALUES ($sID, '$dob', '$school', 'sample photo', '$grade', $program, 'pending', $fID, $mID);";

    //run query
    if(mysqli_query($link, $personSQL) && mysqli_query($link, $parentSQL) && mysqli_query($link, $studentSQL)){
        echo "SUCCESS! Your application has been submitted";
    } else{
        echo "Sorry, something went wrong. Your application was not submitted";
    }    
}
?>
<?php
if (isset($_POST['submit'])){
    $fname = filter_input(INPUT_POST,'pfname');
    $lname = filter_input(INPUT_POST,'plname');
    $email = filter_input(INPUT_POST,'pemail', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST,'pphone');
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $parentRole = filter_input(INPUT_POST, 'parentRole');
    //connect to db
    $link = mysqli_connect("localhost", "213admin", "password", "213project");
    //check if username already exists
    $sql = "SELECT a.username, p.email FROM auth_users a, person p WHERE a.id = p.id AND a.username = '{$username}' OR p.email = '{$email}';";
    $result = mysqli_query($link, $sql);
    if($row = mysqli_fetch_row($result)){
       header('location: signup.php?exists=1');
    }
    //insert person
    $personSQL = "INSERT INTO `person` (type, fname, lname, phone, email) VALUES ('parent', '{$fname}', '{$lname}', '{$phone}', '{$email}');";

    //get their assigned ID
    if(mysqli_query($link, $personSQL)){
        $sql = "SELECT id FROM person WHERE email = '{$email}';";
        $result = mysqli_query($link, $sql); 
        $result_arr = mysqli_fetch_row($result);
        $id = $result_arr[0];
        //insert parent info and create user
        $sql = "INSERT INTO `parent` (id, relationship) VALUES ({$id}, '{$parentRole}');";
        if(mysqli_query($link, $sql)){
            $sql = "INSERT INTO auth_users VALUES ($id, '$username', SHA1('$password'), false);";
            if(mysqli_query($link, $sql)){
                header('location: index.php?status=success');
            }
        }
    }
}
?>
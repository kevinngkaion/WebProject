<!DOCTYPE html>
<?php

// Link to the database
$link = mysqli_connect('localhost', 'cosc219user', 'cosc219', 'cosc219');
// Save user input to variables
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'phone');

// Query
$sql = "INSERT INTO `people`(fname, lname, email, phone) "
        . "VALUES ('{$fname}', '{$lname}', '{$email}', '{$phone}');";
        
$isSuccess = mysqli_query($link, $sql);
if (!$isSuccess){
    header("location: error.php");
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Validation</title>
        <meta name="description" content="Kevin Ngkaion's personal website">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='styles.css'>
        <script src='scripts.js'></script>
    </head>
    <body>
        <header>
            <h1><a class='title' href="index.html">Kevin Ngkaion</a></h1>
            <nav>
                <ul class='navLinks'>
                    <li><a href="formValidation.html">FORM Validation</a></li>
                    <li><a href="formReport.php">FORM and REPORT</a></li>
                    <li><a href="ajaxGetPost.html">AJAX GET versus POST</a></li>
                    <li><a href="https://www.linkedin.com/in/kevinngkaion/" target="_blank">My LinkedIn Account</a></li>
                    <li><a href="https://kevinngkaion.wordpress.com/" target="_blank">My WordPress Blog</a></li>
                    <li><a href="jQueryDemo.html">My JQuery Demo</a></li>
                    <li><a href="otherProjects.html">My Other Projects</a></li>
                </ul>
            </nav>
            <a class="contact" href="#"><button>Contact</button></a>
        </header>
        <main>
            <div id="success">Success! Your information has been entered into the database!</div>
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
                <tr>
                    <?php
                    echo "<td>{$fname}</td>";
                    echo "<td>{$lname}</td>";
                    echo "<td>{$email}</td>";
                    $phone = str_split($phone);
                    echo "<td>";
                    for($j=0; $j<3; $j++){
                        echo "$phone[$j]";
                    }
                        echo "-";
                    for($j=3; $j<6; $j++){
                        echo "$phone[$j]";
                    }
                    echo "-";
                    for($j=6; $j<count($phone); $j++){
                        echo "$phone[$j]";
                    }
                    echo "</td>";
                    ?>
                </tr>
            </table>
            <button id="generateReport"><a href='reports.php'>Show All Entries</a></button>
        </main>
    </body>
</html>

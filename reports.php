<!DOCTYPE html>
<?php

// Link to the database
$link = mysqli_connect('localhost', 'cosc219user', 'cosc219', 'cosc219');
// Query
$sql = "SELECT * FROM `people`;";
$result = mysqli_query($link, $sql);
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
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_row($result)){
                        echo "<tr>";
                        for($i=1; $i<count($row);$i++){
                            if ($i == count($row)-1){
                                $phone = str_split($row[$i]);
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
                            }else{
                                echo "<td>{$row[$i]}</td>";
                            }
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
        </main>
    </body>
</html>

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
     // connect to db and query all info on the people
    $link = mysqli_connect("localhost", "213admin", "password", "213project");
    $sql = "SELECT * FROM person WHERE id NOT IN(SELECT id FROM auth_users) ORDER BY type, id;";
    $result = mysqli_query($link, $sql);
}
?>
<table class="table table-light table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Type</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php
            while($row = mysqli_fetch_row($result)){
                $id = $row[0];
                echo "<tr>";
                for ($i=0; $i<count($row);$i++){
                    echo "<td> {$row[$i]} </td>";
                }
                print "<td><button class='btn btn-secondary' onclick=createAccount({$id})>Create Account</button></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

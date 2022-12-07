<?php
session_start();
if(!$_SESSION['id']){
    header("location: index.php");
} else {
    $userID = $_SESSION['id'];
    // check what type of get request
    if ($_SESSION['type'] == 'student'){
        $sql = "SELECT p.id, p.fname, p.lname, p.phone, p.email, s.dob, s.school, s.grade FROM person p, student s WHERE p.id = s.id AND p.id = $userID;";
    } else if ($_SESSION['type'] == 'parent') {
        $sql = $sql = "SELECT p.id, p.fname, p.lname, p.phone, p.email, s.dob, s.school, s.grade, s.status FROM person p, student s, stu_par sp, parent pa WHERE p.id = s.id AND pa.parent_id = sp.par_id AND s.stu_id = sp.stu_id AND pa.id = $userID;";
    } else {
        $status = filter_input(INPUT_GET, 'status');
        if($status == 'pending'){
            $buttonTxt = "Accept";
            $buttonColor = "btn-success";
            $newStatus = 'active';
        } else if ($status == 'active'){
            $buttonTxt = "Remove";
            $buttonColor = "btn-danger";
            $newStatus = 'inactive';
        } else {
            $buttonTxt = "Renew";
            $buttonColor = "btn-info";
            $newStatus = 'active';
        }
        $sql = "SELECT p.id, p.fname, p.lname, p.phone, p.email, s.dob, s.school, s.grade FROM person p, student s WHERE p.id = s.id AND p.id IN (s.id) AND s.status = '{$status}';";
    }
         // connect to db and query all info on the potential students
    $link = mysqli_connect("localhost", "213admin", "password", "213project");
    $result = mysqli_query($link, $sql);
}
?>
<table class="table table-light table-hover">
    <thead>
    <tr>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">DOB</th>
        <th scope="col">School</th>
        <th scope="col">Grade</th>
        <?php
            if($_SESSION['isAdmin']){
                echo "<th scope='col'>Action</th>";
            } else if($_SESSION['type'] != 'parent'){
            echo "<th scope='col'>Status</th>";
            }
        ?>
    </tr>
    </thead>
    <tbody>
        <?php
            while($row = mysqli_fetch_row($result)){
                $stuID = $row[0];
                echo "<tr>";
                for ($i=1; $i<count($row);$i++){
                    echo "<td> {$row[$i]} </td>";
                }
                if($_SESSION['isAdmin']){
                    print "<td><button class='btn {$buttonColor}' onclick="; print "updateStudent('{$newStatus}',$stuID,'{$status}')>"; echo "{$buttonTxt}</button></td>";
                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

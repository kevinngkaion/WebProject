<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php';?>
        <title>Apply</title>
    </head>
    <body>
        <?php include 'navin.php';?>
        <div class='formContainer'>
            <form name='regForm' action='sendreg.php' method='POST' enctype="multipart/form-data">
                <h2>Student Enrollment</h2>
                <h3>Student Information</h3>
                <div class='input'>
                    <label for='fname'>First Name</label>
                    <input id='fname' name='fname' type='text' placeholder='Obi Wan' required>
                </div>
                <div class='input'>
                    <label for='lname'>Last Name</label>
                    <input id='lname' name='lname' type='text' placeholder='Kenobi' required>
                </div>
                <div class='input'>
                    <label for='semail'>Student's Email</label>
                    <input id='semail' name='semail' type='email' placeholder='obi_wan_kenobi@jedicouncil.org' required>
                </div>
                <div class='input'>
                    <label for='phone'>Phone Number</label>
                    <input id='phone' name='phone' type='tel' placeholder="123-45-678">
                </div>
                <div class="input date">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name='dob' id='dob' required>
                </div>
                <div class='input'>
                    <label for='school'>School</label>
                    <input id='school' name='school' type='text' placeholder='Jedi Academy' required>
                </div>
                <div class='input'>
                    <label for='photo'>Child's Photo</label>
                    <input id='photo' name='photo' type='file' accept="image/" required>
                </div>
                <div class="input select">
                    <label for="grade">Grade Level</label>
                    <select name="grade" id="grade">
                        <option value="K">Kinder</option>
                        <option value="1">Grade 1</option>
                        <option value="2">Grade 2</option>
                        <option value="3">Grade 3</option>
                        <option value="4">Grade 4</option>
                        <option value="5">Grade 5</option>
                        <option value="6">Grade 6</option>
                        <option value="7">Grade 7</option>
                        <option value="8">Grade 8</option>
                        <option value="9">Grade 9</option>
                        <option value="10">Grade 10</option>
                        <option value="11">Grade 11</option>
                        <option value="12">Grade 12</option>
                        <option value="U">Unenrolled</option>
                    </select>
                </div>
                <div class="input select">
                    <label for="program">Program</label>
                    <select name="program" id="program">
                        <option value="1">NYKE Elite Basketball Camp</option>
                        <option value="2">Adodas Predator Soccer Academy</option>
                        <option value="3">Lion Woods Pro Golf Academy</option>
                        <option value="4">Shaun Black School of Big Air</option>
                    </select>
                </div>
                <h3>Parent Information</h3>
                <div class='input'>
                    <label for='ffname'>Father's First Name</label>
                    <input id='ffname' name='ffname' type='text' placeholder='Obi Wan' required>
                </div>
                <div class='input'>
                    <label for='flname'>Father's Last Name</label>
                    <input id='flname' name='flname' type='text' placeholder='Kenobi' required>
                </div>
                <div class='input'>
                    <label for='femail'>Father's Email</label>
                    <input id='femail' name='femail' type='email' placeholder='obi_wan_kenobi@jedicouncil.org' required>
                </div>
                <div class='input'>
                    <label for='fphone'>Father's Phone Number</label>
                    <input id='fphone' name='fphone' type='tel' placeholder="123-45-678">
                </div>

                <!--Mother-->
                <div class='input'>
                    <label for='mfname'>Mother's First Name</label>
                    <input id='mfname' name='mfname' type='text' placeholder='Obi Wan' required>
                </div>
                <div class='input'>
                    <label for='mlname'>Mother's Last Name</label>
                    <input id='mlname' name='mlname' type='text' placeholder='Kenobi' required>
                </div>
                <div class='input'>
                    <label for='memail'>Mother's Email</label>
                    <input id='memail' name='memail' type='email' placeholder='obi_wan_kenobi@jedicouncil.org' required>
                </div>
                <div class='input'>
                    <label for='mphone'>Mother's Phone Number</label>
                    <input id='mphone' name='mphone' type='tel' placeholder="123-45-678">
                </div>  
              
                <div class='input submit'>
                    <input id='submit' name='submit' type='submit' value='Submit'>
                </div>
            </form>
        </div>
    </body>
</html>
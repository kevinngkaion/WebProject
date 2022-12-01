<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Apply</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class='formContainer'>
            <form name='regForm' action='success.php' method='POST' enctype="multipart/form-data">
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
                    <label for='mname'>Middle Name</label>
                    <input id='mname' name='mname' type='text' placeholder='' required>
                </div>
                <div class='input'>
                    <label for='nickname'>Nickname</label>
                    <input id='nickname' name='nickname' type='text' placeholder='Old Ben'>
                </div>
                <div class='input'>
                    <label for='semail'>Student's Email</label>
                    <input id='semail' name='semail' type='email' placeholder='obi_wan_kenobi@jedicouncil.org' required>
                </div>
                <div class='input'>
                    <label for='phone'>Phone Number</label>
                    <input id='phone' name='phone' type='tel' placeholder="123-45-678">
                </div>
                <div class='input radio'>
                    <label for='sex'>Sex</label><br>
                    <input type="radio" name="sex" id="male" value="male" required>
                    <label for="male">Male</label>
                    <input type="radio" name="sex" id="female" value="female">
                    <label for="female">Female</label>
                </div>
                <div class="input date">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name='dob' id='dob' required>
                </div>
                <div class='input'>
                    <label for='school'>School</label>
                    <input id='school' name='school' type='text' placeholder='Jedi Academy' required>
                </div>
                <!-- Vax Status will go here -->
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
                    <label for="program">Tutorial Program</label>
                    <select name="program" id="program">
                        <option value="1">Program 1</option>
                        <option value="2">Program 2</option>
                        <option value="3">Program 3</option>
                        <option value="4">Program 4</option>
                        <option value="5">Program 5</option>
                        <option value="6">Program 6</option>
                        <option value="7">Program 7</option>
                        <option value="8">Program 8</option>
                        <option value="9">Program 9</option>
                    </select>
                </div>
                <div class="input checkbox">
                    <label for="subjects">Select Subjects</label> <br>
                    <input type="checkbox" id="gsAll" name="subject" value="gsAll">
                    <label for="">GS All</label>
                    <input type="checkbox" id="gsMath" name="subject" value="gsMath">
                    <label for="gsMath">GS Math</label>
                    <input type="checkbox" id="gsScience" name="subject" value="gsScience">
                    <label for="gsScience">GS Science</label>
                    <input type="checkbox" id="gsReading" name="subject" value="gsReading">
                    <label for="gsReading">GS Reading</label>
                    <input type="checkbox" id="gsLang" name="subject" value="gsLang">
                    <label for="gsLang">GS Language</label>
                    <input type="checkbox" id="gsFil" name="subject" value="gsFil">
                    <label for="gsFil">GS Filipino</label>
                    <input type="checkbox" id="gsAP" name="subject" value="gsAP">
                    <label for="gsAP">GS AP/Sibika</label>
                    <input type="checkbox" id="hsMath" name="subject" value="hsMath">
                    <label for="hsMath">HS Math</label>
                    <input type="checkbox" id="hsScience" name="subject" value="hsScience">
                    <label for="hsScience">HS Science</label>
                    <input type="checkbox" id="hsEng" name="subject" value="hsEng">
                    <label for="hsEng">HS English</label>
                    <input type="checkbox" id="hsFil" name="subject" value="hsFil">
                    <label for="hsFil">HS Filipino</label>
                    <input type="checkbox" id="other" name="subject" value="other">
                    <label for="other">Other</label>
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
                <div class='input'>
                    <label for='foccupation'>Father's Occupation</label>
                    <input id='foccupation' name='foccupation' type='text' placeholder='' required>
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
                <div class='input'>
                    <label for='moccupation'>Mother's Occupation</label>
                    <input id='moccupation' name='fmccupation' type='text' placeholder='' required>
                </div>
              
                <div class='input submit'>
                    <input id='submit' name='submit' type='submit' value='Submit'>
                </div>
            </form>
        </div>
    </body>
</html>
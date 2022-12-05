<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php';?>
        <title>Apply</title>
    </head>
    <body>
        <?php include 'navin.php';?>
        <div class='container-fluid mt-2'>
            <form name='regForm' action='sendreg.php' method='POST' enctype="multipart/form-data">
                <div class="container d-flex mt-4">
                    <div class="container w-25 border border-3 rounded-1" id='studentInfoContainer'>
                        
                        <legend>Student Information</legend>
                        <div class='mb-3'>
                            <label for='fname' class='form-label'>First Name</label>
                            <input id='fname' class='form-control' name='fname' type='text' placeholder='Obi Wan' required>
                        </div>
                        <div class='mb-3'>
                            <label for='lname' class='form-label'>Last Name</label>
                            <input id='lname' class='form-control' name='lname' type='text' placeholder='Kenobi' required>
                        </div>
                        <div class='mb-3'>
                            <label for='semail' class='form-label'>Student's Email</label>
                            <input id='semail' class='form-control' name='semail' type='email' placeholder='obi_wan_kenobi@jedicouncil.org' required>
                        </div>
                        <div class='mb-3'>
                            <label for='phone' class='form-label'>Phone Number</label>
                            <input id='phone' class='form-control' name='phone' type='tel' placeholder="123-45-678">
                        </div>
                        <div class="mb-3 date" class='form-label'>
                            <label for="dob">Date of Birth</label>
                            <input type="date" class='form-control' name='dob' id='dob' required>
                        </div>
                        <div class='mb-3'>
                            <label for='school' class='form-label'>School</label>
                            <input id='school' class='form-control' name='school' type='text' placeholder='Jedi Academy' required>
                        </div>
                        <!-- <div class='input'>
                            <label for='photo'>Child's Photo</label>
                            <input id='photo' name='photo' type='file' accept="image/" required>
                        </div> -->
                        <div class="mb-3">
                            <label class='form-label' for="grade">Grade Level</label>
                            <select class='form-select' name="grade" id="grade">
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
                        <div class="mb-3">
                            <label class='form-label' for="program">Program</label>
                            <select class='form-select' name="program" id="program">
                                <option value="1">NYKE Elite Basketball Camp</option>
                                <option value="2">Adodas Predator Soccer Academy</option>
                                <option value="3">Lion Woods Pro Golf Academy</option>
                                <option value="4">Shaun Black School of Big Air</option>
                            </select>
                        </div>
                    </div>
                                        
                    <div class='align-self-center'>
                            <input id='submit' class ='btn btn-success btn-large' name='submit' type='submit' value='Submit'>
                        </div>

                    <div class="container w-25 border border-3 rounded-1 " id='parentInfoContainer'>
                        <legend>Parent Information</legend>
                        <div class='mb-3'>
                            <label for='ffname' class='form-label'>Father's First Name</label>
                            <input id='ffname' class ='form-control'name='ffname' type='text' placeholder='Obi Wan' required>
                        </div>
                        <div class='mb-3'>
                            <label for='flname' class='form-label'>Father's Last Name</label>
                            <input id='flname' class ='form-control'name='flname' type='text' placeholder='Kenobi' required>
                        </div>
                        <div class='mb-3'>
                            <label for='femail' class='form-label'>Father's Email</label>
                            <input id='femail' class ='form-control'name='femail' type='email' placeholder='obi_wan_kenobi@jedicouncil.org' required>
                        </div>
                        <div class='mb-3'>
                            <label for='fphone' class='form-label'>Father's Phone Number</label>
                            <input id='fphone' class ='form-control'name='fphone' type='tel' placeholder="123-45-678">
                        </div>

                        <!--Mother-->
                        <div class='mb-3'>
                            <label for='mfname' class='form-label'>Mother's First Name</label>
                            <input id='mfname' class ='form-control'name='mfname' type='text' placeholder='Obi Wan' required>
                        </div>
                        <div class='mb-3'>
                            <label for='mlname' class='form-label'>Mother's Last Name</label>
                            <input id='mlname' class ='form-control'name='mlname' type='text' placeholder='Kenobi' required>
                        </div>
                        <div class='mb-3'>
                            <label for='memail' class='form-label'>Mother's Email</label>
                            <input id='memail' class ='form-control'name='memail' type='email' placeholder='obi_wan_kenobi@jedicouncil.org' required>
                        </div>
                        <div class='mb-3'>
                            <label for='mphone' class='form-label'>Mother's Phone Number</label>
                            <input id='mphone' class ='form-control'name='mphone' type='tel' placeholder="123-45-678">
                        </div>  

                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
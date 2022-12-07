
<div class='container-sm mt-3 px-3 pb-3 bg-light border shadow rounded' style='max-width: 500px;'>
    <?php

    ?>
    <form name='regForm' action='createStudent.php' method='POST' enctype="multipart/form-data">
        <legend>Student Information</legend>
        <div class="row">
            <div class='mb-3 col'>
                <label for='fname' class='form-label'>First Name</label>
                <input id='fname' class='form-control' name='fname' type='text' placeholder='Obi Wan' required>
            </div>
            <div class='mb-3 col'>
                <label for='lname' class='form-label'>Last Name</label>
                <input id='lname' class='form-control' name='lname' type='text' placeholder='Kenobi' required>
            </div>
        </div>

        <div class="row">
            <div class='mb-3 col'>
                <label for='phone' class='form-label'>Phone Number</label>
                <input id='phone' class='form-control' name='phone' type='tel' placeholder="123-45-678">
            </div>      
            <div class="mb-3 col date" class='form-label'>
                <label for="dob">Date of Birth</label>
                <input type="date" class='mt-2 form-control' name='dob' id='dob' required>
            </div>
        </div>
        <div class='mb-3 col'>
            <label for='email' class='form-label'>Student's Email</label>
            <input id='email' class='form-control' name='email' type='email' placeholder='obi_wan_kenobi@jedicouncil.org' required>
        </div>
        
        <div class="row">
            <div class='mb-3 col'>
                <label for='school' class='form-label'>School</label>
                <input id='school' class='form-control' name='school' type='text' placeholder='Jedi Academy' required>
            </div>
            <!-- <div class='input'>
                <label for='photo'>Child's Photo</label>
                <input id='photo' name='photo' type='file' accept="image/" required>
            </div> -->
            <div class="mb-3 col">
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
        </div>
        <div class="mb-3 col">
            <label class='form-label' for="program">Program</label>
            <select class='form-select' name="program" id="program">
                <option value="1">NYKE Elite Basketball Camp</option>
                <option value="2">Adodas Predator Soccer Academy</option>
                <option value="3">Lion Woods Pro Golf Academy</option>
                <option value="4">Shaun Black School of Big Air</option>
            </select>
        </div>
                            
        <div class="mt-2 d-grid">
            <input id='submit' class ='btn btn-success' name='submit' type='submit' value='Submit'>
        </div>
    </form>
</div>
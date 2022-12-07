<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php';?>
        <title>Apply</title>
    </head>
    <body>
        <?php
            include 'navin.php';
            if (isset($_GET['exists'])){
                echo '<div class="alert alert-danger text-center" role="alert">Sorry. This username or email already exists. Please try again.</div>';
            }
        ?>
        
        <div class='container-sm mt-5 px-3 pb-3 bg-light border shadow rounded' style='max-width: 500px;'>
            <form class='btn-block' name='regForm' action='createParent.php' method='POST' enctype="multipart/form-data">
                <legend>Create a Parent Account</legend>
                <div class='mb-1'>
                    <label for='username' class='form-label'>Username</label>
                    <input id='username' class ='form-control'name='username' type='text' placeholder='yourusername' required>
                </div>
                <div class='mb-1'>
                    <label for='password' class='form-label'>Password</label>
                    <input id='password' class ='form-control'name='password' type='password' placeholder='P@ssw0rD' required>
                </div>
                <div class='mb-1'>
                    <label for='pfname' class='form-label'>First Name</label>
                    <input id='pfname' class='form-control'name='pfname' type='text' placeholder='Obi Wan' required>
                </div>
                <div class='mb-1'>
                    <label for='plname' class='form-label'>Last Name</label>
                    <input id='plname' class ='form-control'name='plname' type='text' placeholder='Kenobi' required>
                </div>
                <div class="mb-1">
                    <div>
                        <label for="parentRole" class="form-label">Parental Role</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name='parentRole' id='father' value='father' checked>
                        <label for="father" class="form-check-label">Father</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name='parentRole' id='mother' value='mother'>
                        <label for="mother" class="form-check-label">Mother</label>
                    </div>
                </div>
                <div class='mb-1'>
                    <label for='pemail' class='form-label'>Email</label>
                    <input id='pemail' class ='form-control'name='pemail' type='email' placeholder='obi_wan_kenobi@jedicouncil.org' required>
                </div>
                <div class='mb-1'>
                    <label for='pphone' class='form-label'>Phone Number</label>
                    <input id='pphone' class ='form-control'name='pphone' type='tel' placeholder="123-45-678">
                </div>
                <div class="mt-2 d-grid">
                    <input id='submit' class ='btn btn-success' name='submit' type='submit' value='Submit'>
                </div>
            </form>
        </div>
    </body>
</html>
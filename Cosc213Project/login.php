<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php' ?>
        <title>COSC 213 Project: Log In</title>
    </head>
    <body>
        <?php include 'navin.php' ?>

        <!--Log in Form-->
        <div class="container mt-5 d-flex justify-content-around">
            <form class='border border-rounded shadow' action="verifyUser.php" method="post">
                <div class="pt-3 px-3 mb-3">
                    <label class='form-label' for="username">Username:</label>
                    <input class='form-control' type="text" name="username" id="username" required>
                </div>
                <div class="px-3 mb-3">
                    <label class='form-label' for="password">Password:</label>
                    <input class='form-control' type="password" name="password" id="password" required>
                </div>
                <div class="pb-3 px-3 mb-3">
                    <input class='btn btn-primary form-control' type="submit" name="login" id="login" value="Login">
                </div>
            </form>
        </div>
    </body>
</html>

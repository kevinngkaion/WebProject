<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php' ?>
        <title>COSC 213 Project: Log In</title>
    </head>
    <body>
        <?php include 'navbar.php' ?>

        <!--Log in Form-->
        <div class="loginContainer">
            <form action="verifyUser.php" method="post">
                <div class="input">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="input">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="input login">
                    <input type="submit" name="login" id="login" value="Login">
                </div>
            </form>
        </div>
    </body>
</html>

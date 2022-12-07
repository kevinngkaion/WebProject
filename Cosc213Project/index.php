<!DOCTYPE html>
<html>
    <head>
        <?php include 'head.php'; ?>
        <title>COSC 213 Project: Home</title>
    </head>

    <body>
        <?php include 'navin.php';
        if(isSet($_GET['status'])){
            echo "<div class='alert alert-success text-center' role='alert'>Your account has been created!</div>";
        }
        ?>

        <!--Register button-->
        <div class="container">
            <div class="text-center col mt-5">
                <a href="formReg.php" class="btn btn-primary btn-lg">Register Now!</a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

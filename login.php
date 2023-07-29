<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter to Hogward</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="logo.png">
</head>

<body class="body-login ">
    <div class="black-fill"><br />
        <div class="d-flex justify-content-center align-items-center flex-column">


            <form class="login" method="post" action="req/login.php">
                <div class="text-center">
                    <img src="logo.png" width="200">
                </div>
                <h5>Log In</h5>
                <?php
                if (isset($_GET['error'])){?>

                <div class="alert alert-danger" role="alert">
                    <?=$_GET['error'] ?>
                </div>
                <?php }?>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="uname">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass">
                </div>

                <div class="mb-3">
                    <label class="form-label">Login As</label>
                    <select class="form-control" name="role">
                        <option value="1">Admin</option>
                        <option value="3">Student</option>
                        <option value="2">Teacher</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Log In</button>
                <a href="index.php" class="text-decoration-none">Home</a>
            </form>
            <!-- <br /><br /> -->

            <div class="text-center text-light">
                <!-- <?php
                $pass=123;
                $pass=password_hash($pass,PASSWORD_DEFAULT);
                echo $pass;
                ?> -->
            </div>

            <!-- <div class="text-center text-light">

                Copyright &copy; 
                <?php
                    echo date("d.m.Y")." " .date("l").",";
                    ?>
                Hogward School. All Rights Reserved.

            </div> -->
        </div>

    </div>


    <footer class="">

        <div class="text-center text-light black-fill2">

            Copyright &copy; <?php
                    echo date("d.m.Y")." " .date("l").",";
                    ?>
            Hogward School. All Rights Reserved.

        </div>


    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>



</html>
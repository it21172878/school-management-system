<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['role'])){?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Hogwart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="logo.png">
</head>

<body class="body-home ">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="shadow w-450 p-3 text-center bg-light">
            <small>Role:
                <b>
                    <?php
                        if($_SESSION['role']=='Admin'){
                            echo "Admin";
                        }else if($_SESSION['role']=='Teacher'){
                            echo "Teacher";
                        }else{
                            echo "Student";
                        }
                    ?>
                </b><br>
                <h3 class="display-4"><?=$_SESSION['fname']?></h3>
                <a href="logout.php" class="btn btn-warning">
                    Log Out
                </a>
            </small>
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
<?php } else{
header("Location: login.php");
exit;
}?>
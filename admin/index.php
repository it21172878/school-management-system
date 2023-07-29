<?php
session_start();
if(isset($_SESSION['admin_id']) && isset($_SESSION['role'])){
    if($_SESSION['role']=='Admin'){
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Hogwart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../logo.png" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Register-Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Section</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Course</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Message</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Settings</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-right mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">LogOut</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="d-flex justify-content-center align-items-center vh-100">
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
    </div> -->

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
<?php
} else{
    header("Location: ../login.php");
    exit;
    }
} else{
    header("Location: ../login.php");
    exit;
}
?>
<?php
session_start();
if(isset($_SESSION['admin_id']) && isset($_SESSION['role'])){
    if($_SESSION['role']=='Admin'){
        include "../DB_connection.php";
        include "data/teacher.php";
        include "data/subject.php";
        include "data/grade.php";
        $teachers=getAllTeachers($conn);
        // $subjects=getAllSubjects($conn);
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Add Teacher</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php
include "../admin/inc/navbar.php";

?>
    <div class="container mt-5">
        <a href="teacher.php" class="btn btn-dark">Go Back</a>

        <form class="shadow p-3 mt-5 form-w" method="post" action="">
            <h5>Add New User</h5>
            <hr>

            <div class="mb-3">
                <label class="form-label">First name</label>
                <input type="text" class="form-control" name="fname">
            </div>

            <div class="mb-3">
                <label class="form-label">Last name</label>
                <input type="text" class="form-control" name="lname">
            </div>

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="Username">
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group mb-3">


                    <input type="text" class="form-control" name="pass" id="passInput">
                    <button class="btn btn-secondary" id="gBtn">Random</button>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Subject</label>
                <input type="text" class="form-control" name="subject">
            </div>

            <div class="mb-3">
                <label class="form-label">Grade</label>
                <input type="text" class="form-control" name="grade">
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>

    </div>


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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#navLinks li:nth-child(2) a").addClass('active');
    });



    function makePass(length) {
        let result = '';
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        const charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random(

            ) * charactersLength));

        }
        var passInput = document.getElementById('passInput');
        passInput.value = result;
    }

    var gBtn = document.getElementById('gBtn');
    gBtn.addEventListener('click', function(e) {
        e.preventDefault();
        makePass(4);
    });
    </script>
</body>

<!-- <footer class="">

    <div class="text-center text-light black-fill2">

        Copyright &copy; <?php
            echo date("d.m.Y")." " .date("l").",";
            ?>
        Hogward School. All Rights Reserved.

    </div>


</footer> -->

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
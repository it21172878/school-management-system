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
    <title>Admin | Teachers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php
include "../admin/inc/navbar.php";
if($teachers !=0){

?>
    <div class="container mt-5">
        <a href="" class="btn btn-dark">Add New Teacher</a>
        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($teachers as $teacher){?>


                    <tr>
                        <th scope="row">1</th>
                        <td><?=$teacher['teacher_id']?></td>
                        <td><?=$teacher['fname']?></td>
                        <td><?=$teacher['lname']?></td>
                        <td><?=$teacher['username']?></td>
                        <td>
                            <?php
                            $s='';
                            $subjects=str_split(trim($teacher['subjects']));
                            foreach($subjects as $subject){
                                $s_temp=getSubjectById($subject,$conn);
                                if($s_temp !=0)
                                    $s.=$s_temp['subject_code'].', ';
                            }
                            echo $s;
                            ?>
                        </td>
                        <td>
                            <?php
                            $g='';
                            $grades=str_split(trim($teacher['grades']));
                            foreach($grades as $grade){
                                $g_temp=getGradeById($grade,$conn);
                                if($g_temp !=0)
                                    $g.=$g_temp['grade_code'].'-'.$g_temp['grade'].', ';
                            }
                            echo $g;
                            ?>
                        </td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <?php }else{ ?>
        <div class="alert alert-info .w-450 m-5" role="alert">
            Empty!
        </div>
        <?php } ?>
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
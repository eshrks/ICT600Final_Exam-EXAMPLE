<?php
session_start();
function check_error($error)
{
    if (isset($_SESSION['err'])) {
        echo $_SESSION['err'][$error];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <style>
        .myForm {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form {
            width: 50vw;
            padding: 2rem 2rem;
            border-radius: 10px;
            background-color: whitesmoke;
        }

        .error {
            color: red;
            font-size: .8rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <section id="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="..">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../user/index.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Students</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <!-- Forms -->
    <div class="myForm">
        <form action="../process/student_add_exe.php" class="form" method="post">
            <h3 style="text-align: center;">Student's Information</h3>
            <div class="form-group">
                <label for="">Student Level</label>
                <select name="userLevel" class="form-control" id="" required>
                    <option value="">Select</option>
                    <option value="elementary">Elementary</option>
                    <option value="high_school">High School</option>
                    <option value="college">College</option>
                </select>
            </div>


            <div class="form-group">
                <label for="">Student Number:*</label>
                <input type="text" class="form-control" name="studentNumber" id="">
                <p class="error"><?php check_error('err_studentNumber') ?></p>
            </div>

            <div class="form-group">
                <label for="">Full Name:*</label>
                <input type="text" class="form-control" name="fullName" id="">
                <p class="error"><?php check_error('err_fullName') ?></p>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Midterm Grade:*</label>
                    <input type="text" class="form-control" name="midtermGrade" id="">
                    <p class="error"><?php check_error('err_midtermGrade') ?></p>
                </div>

                <div class="form-group col-md-6">
                    <label for="">Final Grade:*</label>
                    <input type="text" class="form-control" name="finalGrade" id="">
                    <p class="error"><?php
                                        check_error('err_finalGrade');
                                        unset($_SESSION['err']);
                                        ?></p>
                </div>
            </div>

            <input type="submit" class="btn btn-success" value="Register">
        </form>
    </div>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>
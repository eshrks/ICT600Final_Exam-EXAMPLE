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
    <title>User Registration</title>
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
                        <a class="nav-link" href="index.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../student/index.php">Students</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    
    <!-- Forms -->
    <div class="myForm">
        <form action="../process/user_add_exe.php" class="form" method="post">
            <h3 style="text-align: center;">User's Information</h3>
            <div class="form-group">
                <label for="">User Level</label>
                <select name="userLevel" class="form-control" id="" required>
                    <option value="">Select</option>
                    <option value="admin">Admin</option>
                    <option value="it_admin">IT Admin</option>
                    <option value="student">Student</option>
                </select>
            </div>


            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Last Name:*</label>
                    <input type="text" class="form-control" name="lastName" id="">
                    <p class="error"><?php check_error('err_lastName') ?></p>
                </div>

                <div class="form-group col-md-4">
                    <label for="">First Name:*</label>
                    <input type="text" class="form-control" name="firstName" id="">
                    <p class="error"><?php check_error('err_firstName') ?></p>
                </div>

                <div class="form-group col-md-4">
                    <label for="">Middle Name:</label>
                    <input type="text" class="form-control" name="middleName" id="">
                </div>
            </div>

            <div class="form-group">
                <label for="">Contact Number:*</label>
                <input type="text" class="form-control" name="contactNumber" id="">
                <p class="error"><?php check_error('err_contactNumber') ?></p>
            </div>

            <div class="form-group">
                <label for="">User Name:*</label>
                <input type="text" class="form-control" name="userName" id="">
                <p class="error"><?php check_error('err_userName') ?></p>
            </div>

            <div class="form-group">
                <label for="">Password:*</label>
                <input type="text" class="form-control" name="pword" id="">
                <p class="error"><?php
                                    check_error('err_pword');
                                    unset($_SESSION['err']);
                                    ?></p>
            </div>

            <input type="submit" class="btn btn-success" value="Register">
        </form>
    </div>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>
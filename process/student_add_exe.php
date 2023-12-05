<?php
session_start();

include_once('../config/database.php');

$table_name     = "students";

$user_level     = "userLevel";
$student_number = "studentNumber";
$full_name      = "fullName";
$midterm_grade  = "midtermGrade";
$final_grade    = "finalGrade";
$date_created   = "dateCreated";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userLevel = $_POST['userLevel'];
    $studentNumber = $_POST['studentNumber'];
    $fullName = $_POST['fullName'];
    $midtermGrade = $_POST['midtermGrade'];
    $finalGrade = $_POST['finalGrade'];

    $err = [
        'err_studentNumber' => '',
        'err_fullName' => '',
        'err_midtermGrade' => '',
        'err_finalGrade' => '',
    ];


    // Validation
    if (empty($studentNumber)) {
        $err['err_studentNumber'] = "Student Number cannot be blank.";
    }
    if (empty($fullName)) {
        $err['err_fullName'] = "Your Full Name cannot be blank.";
    }
    if (empty($midtermGrade)) {
        $err['err_midtermGrade'] = "Midterm Grade cannot be blank.";
    }
    if (empty($finalGrade)) {
        $err['err_finalGrade'] = "Final Grade cannot be blank.";
    }


    if (empty(array_filter($err))) {
        $dateCreated = date('Y-m-d');

        $query = "INSERT INTO $table_name (
            $user_level,
            $student_number,
            $full_name,
            $midterm_grade,
            $final_grade,
            $date_created
        )
        VALUES (
            '$userLevel',
            '$studentNumber',
            '$fullName',
            '$midtermGrade',
            '$finalGrade',
            '$dateCreated')";

        if (mysqli_query($conn, $query)) {
            header('location: ../student/index.php');
        } else {
            echo '<br>Error: ' . $query . ' ' . mysqli_error($conn);
        }

        mysqli_close($conn);
    } else {
        header('location: ../student/student_add.php');
        $_SESSION['err'] = $err;
    }
}
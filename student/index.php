<?php
include_once '../process/student_select_exe.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
</head>

<body>

  <!-- Header -->
  <section id="header">
    <div class="container-fluid">

      <div class="row p-5">
        <div class="col-12 col-lg-4 text center">
          <span class="display-4">The Logo</span>
        </div>
      </div>
    </div>
  </section>

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


  <!-- Table -->
  <section id="content">
    <div class="container-fluid">
      <div class="container p-5">

        <div>
          <h1>Students List <a class="btn btn-primary btn-sm" href="student_add.php">Add</a></h1>


        </div>

        <div>
          <table class="table">
            <thread>
              <tr>
                <th>User Level</th>
                <th>Student Number</th>
                <th>Full Name</th>
                <th>Midterm Grade</th>
                <th>Final Grade</th>
                <th>Option</th>
              </tr>
            </thread>

            <tbody>
              <?php
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {


              ?>
                  <tr>
                    <td>
                      <?php echo $row['userLevel']; ?>
                    </td>
                    <td>
                      <?php echo $row['studentNumber']; ?>
                    </td>
                    <td>
                      <?php echo $row['fullName']; ?>
                    </td>
                    <td>
                      <?php echo $row['midtermGrade']; ?>
                    </td>
                    <td>
                      <?php echo $row['finalGrade']; ?>
                    </td>
                    <td>
                      Edit | Delete
                    </td>
                  </tr>
              <?php
                }
              } else {
                echo 'NO DATA TO SHOW';
              }
              ?>
            </tbody>



          </table>
        </div>

      </div>
    </div>
  </section>

  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/popper.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>
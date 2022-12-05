<?php
session_start();
require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">



    <title>THE YELLOW FERRIES</title>

</head>

<body>
    <div class="container mt-5">
        <?php include('message.php') ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Passenger Details
                                    <a href="dashboard.php" class="btn btn-secondary float-end">BACK</a>
                            </div>
                        </h4>
                    </div>

                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM passengers Where id='$student_id'";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>


                                <div class="mb-3">
                                    <label for="">NAME</label>
                                    <p class="form-control">
                                        <?= $student['name'] ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="">EMAIL</label>
                                    <p class="form-control">
                                        <?= $student['email'] ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="">NUMBER</label>
                                    <p class="form-control">
                                        <?= $student['number'] ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="">ADDRESS</label>
                                    <p class="form-control">
                                        <?= $student['address'] ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="">DEPARTURE</label>
                                    <p class="form-control">
                                        <?= $student['date'] ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label for="">TRIP</label>
                                    <p class="form-control">
                                        <?= $student['trip'] ?>
                                    </p>
                                </div>


                        <?php
                            } else {
                                echo "<h4>No such record found!</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
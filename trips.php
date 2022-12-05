<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets//css/bootstrap.min.css">



    <title>Document</title>

</head>

<body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Passenger Information
                            <a href="index.html" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label for="">NAME</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">EMAIL</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">NUMBER</label>
                                <input type="text" name="number" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">ADDRESS</label>
                                <input type="text" name="address" class="form-control"required>
                            </div>
                            <div class="mb-3">
                                <label for="">DEPARTURE</label>
                                <input type="date" name="date" class="form-control"required>
                            </div>
                            <div class="row mb-3">
                                <h4 class="text-center">TRIPS</h4>
                                <div class="col-3">
                                <strong>OLANGO PORT</strong><br>
                                    <input type="radio" name="trip" value="4:00AM-4:30AM" required>4:00AM-4:30AM
                                    <br>
                                    <input type="radio" name="trip" value="6:00AM-6:30AM" required>6:00AM-6:30AM
                                    <br>
                                    <input type="radio" name="trip" value="8:00AM-8:30AM" required>8:00AM-8:30AM
                                    <br>
                                </div>
                                
                                <div class="col-3">
                                    <strong>ANGASIL PORT</strong>
                                    <br>
                                    <input type="radio" name="trip" value="5:00AM-5:30AM" required>5:00AM-5:30AM
                                    <br>
                                    <input type="radio" name="trip" value="7:00AM-7:30AM" required>7:00AM-7:30AM
                                    <br>
                                    <input type="radio" name="trip" value="9:00AM-9:30AM" required>9:00AM-9:30AM
                                    <br>
                                </div>

                                <div class="col-3">
                                    <strong>OLANGO PORT</strong> <br>
                                    <input type="radio" name="trip" value="12:30PM-1:00PM" required>12:30PM-1:00PM
                                    <br>
                                    <input type="radio" name="trip" value="3:30PM-4:00PM" required>3:30PM-4:00PM
                                    <br>
                                    <input type="radio" name="trip" value="6:30PM-7:00PM" required>6:30PM-7:00PM
                                    <br>
                                </div>

                                <div class="col-3">
                                    <strong>ANGASIL PORT</strong> <br>
                                    <input type="radio" name="trip" value="2:00PM-2:30PM" required>2:00PM-2:30PM
                                    <br>
                                    <input type="radio" name="trip" value="4:3PAM-5:00PM" required>4:30PM-5:00PM
                                    <br>
                                    <input type="radio" name="trip" value="5:30PM-6:00PM" required>5:30PM-6:00PM
                                    <br>
                                </div>

                            </div>
                            <div class="mb-3">
                               <button type="submit" name="save" class="btn btn-primary float-end">BOOK</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
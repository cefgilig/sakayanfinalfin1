<?php
    session_start();
    require 'dbcon.php';

    if(isset($_POST['update_passenger'])){
        
        $id = mysqli_real_escape_string($con, $_POST['id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $number = mysqli_real_escape_string($con, $_POST['number']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $date = mysqli_real_escape_string($con, $_POST['date']);
        $trip = mysqli_real_escape_string($con, $_POST['trip']);

        $query = "UPDATE passengers SET name='$name', email='$email', number='$number', address='$address', date='$date', trip='$trip' 
                    WHERE id='$id' ";

        $query_run = mysqli_query($con, $query);

        if($query_run){
            $_SESSION['message'] = "Passenger Updated Succesfully";
            header("Location: dashboard.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Passenger Not Updated";
            header("Location: dashboard.php");
            exit(0);

        }
    }

    if(isset($_POST['save'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $number = mysqli_real_escape_string($con, $_POST['number']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $date = mysqli_real_escape_string($con, $_POST['date']);
        $trip = mysqli_real_escape_string($con, $_POST['trip']);

        $query = "INSERT INTO passengers (name, email, number, address, date, trip) VALUES 
            ('$name','$email','$number','$address','$date', '$trip')";

        $query_run = mysqli_query($con, $query);


        if($query_run){
            $_SESSION['message'] = "Thank you passenger/s! Your booking was successful and your booking is now confirmed.";
            header("Location: notification.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Passenger Not Added";
            header("Location: notification.php");
            exit(0);
        }
        
    }
    if(isset($_POST['delete'])){

        $id = mysqli_real_escape_string($con, $_POST['delete']);
    
        $query = "DELETE FROM passengers WHERE id='$id' ";
        $query_run = mysqli_query($con, $query);
    
        if($query_run){
            $_SESSION['message'] = "Passenger Deleted Succesfully";
            header("Location: dashboard.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Passenger Not Deleted";
            header("Location: dashboard.php");
            exit(0);
        }
    }

?>
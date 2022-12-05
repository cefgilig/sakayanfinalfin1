<?php 
    session_start();
    require'dbcon.php';

    if(isset($_POST['save_passenger'])){
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
            header("Location: dashboard.php");
            exit(0);
        }
        else{
            $_SESSION['message'] = "Passenger Not Added";
            header("Location: dashboard.php");
            exit(0);
        }
        
    }

if(isset($_POST['username']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)){
        header("Location: login.php?error=Username is Required!");
        exit();
    }
    else if(empty($username)){
        $_SESSION['message2'] = "Password is Required!";            
        header("Location: login.php");
        exit();

    }
    else{
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['username'] === $username && $row['password'] === $password){
                header("Location: dashboard.php");
            }
            else{
                $_SESSION['message'] = "Incorrect Username or Password!";
                header("Location: login.php");
                exit(0);
            }

        }
        else{
            $_SESSION['message'] = "Incorrect Username or Password!";
            header("Location: login.php");
            exit(0);

        }
    }

}
else{
    header("Location: index.php");
    exit();
}


?>
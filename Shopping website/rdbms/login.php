<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $Gender = $_POST['gender'];
        $num = $_POST['number'];
        $address = $_POST['add'];
        $gmail = $_POST['mail'];
        $password = $_POST['mail'];

        if(empty($gmail) && !empty($password) && !is_numeric($gmail)){
            $query = "insert into form (fname,Iname, gender, cnum,address, email, pass) values ('$firstname','$lastname','$Gender','$num','$address','$gmail','$password')";        
            mysqli_qurey($con, $query);

            echo "<script type = 'text/javascript'> alert('Successfully Register')</script>";
        }
        else{
            echo "<script type = 'text/javascript'> alert('Please enter valid Information')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form login and Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
        <h1>login</h1>
        <h4>It's free and only takes a minutes</h4>
        <form method="POST">
            <label>Email</label>
            <input type="email" name="mail" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>Not have a account? <a href="/signup.php">Sign Up here</a></p>
    </div>
    
</body>
</html>
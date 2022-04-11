<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    $conn = mysqli_connect('localhost', 'root', '', 'sms');

    if($password != $confirmPassword){
        session_start();
        $_SESSION['error_msg'] = 'Both password should be matched'; 
        header("Location: 11_registration.php");
    }
    else{
        $sql = "INSERT INTO users VALUES(null, '$name', '$email', '$password');";
        if(mysqli_query($conn, $sql)){
            session_start();
            $_SESSION['reg_msg'] = 'Successfully created account. Login here';
            header("Location: 8_login.php");
        }
    }


?>
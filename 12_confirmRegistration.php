<?php 
    session_start();

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    $conn = mysqli_connect('localhost', 'root', '', 'sms');

    if($password != $confirmPassword){
        $_SESSION['error_msg'] = 'Both password should be matched'; 
        header("Location: 11_registration.php");
    }
    else{

        $sql1 = "SELECT * FROM users WHERE email='$email';";
        $result = mysqli_query($conn, $sql1);
        $rowCount = mysqli_num_rows($result);

        if($rowCount == 1){
            $_SESSION['reg_error_msg'] = "Email Already Exist. Please login";
            header("Location: 11_registration.php");
        }
        else{
            $sql2 = "INSERT INTO users VALUES(null, '$name', '$email', '$password');";
            if(mysqli_query($conn, $sql2)){
                session_start();
                $_SESSION['reg_msg'] = 'Successfully created account. Login here';
                header("Location: 8_login.php");
            }
        }



    }


?>
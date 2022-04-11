<?php
    session_start();
    $name = $_POST['name'];
    $class_id = $_POST['class_id'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $conn = mysqli_connect('localhost', 'root', '', 'sms');

    $sql = "INSERT INTO students VALUES(null, '$name', '$class_id', $age, '$phone', '$address');";

    if(mysqli_query($conn, $sql)){
        $_SESSION['success'] = 1;
        header(("Location: 1_index.php"));
        // header(("Location: 1_index.php?success=1"));
    }
    else{
        $_SESSION['error'] = 1;
        header(("Location: 2_insert.php"));
        // header(("Location: 2_insert.php?error=1"));
    }
?>
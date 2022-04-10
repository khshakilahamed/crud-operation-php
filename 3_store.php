<?php
    $name = $_POST['name'];
    $class_id = $_POST['class_id'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $conn = mysqli_connect('localhost', 'root', '', 'sms');

    $sql = "INSERT INTO student VALUES(null, '$name', '$class_id', $age, '$phone', '$address');";

    mysqli_query($conn, $sql);
?>
<?php 

    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: 8_login.php");
    }

    $id = $_GET['id'];

    $name = $_POST['name'];
    $class_id = $_POST['class_id'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $conn = mysqli_connect('localhost', 'root', '', 'sms');

    $sql="UPDATE student SET name='$name', class_id='$class_id', age=$age, phone=$phone, address='$address' WHERE id=$id;";

    if(mysqli_query($conn, $sql)){
        header("location: 4_show.php?id=".$id);
    }
    else{
        echo "Not Updated";
    }
?>
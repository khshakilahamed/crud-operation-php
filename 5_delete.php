<?php 

    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: 8_login.php");
    }
    
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'sms');

    $sql = "DELETE FROM student WHERE id=$id";

    if(mysqli_query($conn, $sql)){
        header("Location: 1_index.php");
    }
    else{
        echo "Not Deleted";
    }
?>
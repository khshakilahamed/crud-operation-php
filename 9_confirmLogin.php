<?php 
    $email = $_POST['email'];
    $password = $_POST['password'];

   $conn = mysqli_connect('localhost', 'root', '', 'sms');
   
   $sql = "SELECT * FROM users WHERE email = '$email' AND password='$password'";

   $result = mysqli_query($conn, $sql);

   $rowCount = mysqli_num_rows($result);

   if($rowCount == 1){
       session_start();
       $_SESSION['login'] = true;
       header("Location: 1_index.php");
   }
   else{
        session_start();
        $_SESSION['error']=true;
        header("Location: 8_login.php");
    // echo "Wrong Email and Password";
   }

?>
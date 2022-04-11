<?php
    session_start();
    session_destroy();

    header('Location: 8_login.php');
?>
<?php
    session_start();
    if (isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else{
        session_destroy();
        header("location: ../login.php?msg=Faça login primeiro");
    }
?>
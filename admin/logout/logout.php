<?php
   

    if(isset($_POST['logout'])) {
        header("Location: ../Login/login.php");
        exit();
    }
?>
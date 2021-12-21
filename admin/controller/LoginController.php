<?php
    $username = $_POST[Username];
    $password = $_POST[password];
    if($username == "admin" && $password == "admin"){
        header('Location:../MainMenu.php');
    }
       
?>
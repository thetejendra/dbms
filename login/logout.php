<?php 
// session_start();

// session_unset();
// session_destroy();

// header("Location: index.php");

if(isset($_POST['logout'])){
    header("Location: login/login.php");
}else{
    header("Location: index.php");
}
<?php 
session_start();
include "../db_conn.php";
if(isset($_POST['logout'])){
    unset( $_SESSION['user_id']);
    unset($_SESSION['name']);
    $_SESSION['message']="Login to continue";
       header("Location: login.php");
}
?>
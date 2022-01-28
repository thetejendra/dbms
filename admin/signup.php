<?php
session_start();
include "includes/header.php";
include "includes/db_conn.php";

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $name= htmlentities($name);
    $email= htmlentities($email);
    $password= htmlentities($password);
    $password= password_hash($password, PASSWORD_BCRYPT);

    $sql1 = "SELECT * FROM users WHERE name='$name' or email='$email' ";
    $result1 = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result1)>0){
        $_SESSION['message']="Account already exists !! Please Login to Continue"; 
        header("Location: login.php");
    }
    else{
        $sql= "insert into users(name, email, password) values('$name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            $_SESSION['name']=$name;
            $_SESSION['message']=" Successfully Registered";
            header("Location: login.php");
        }else{
            header("Location: login.php");
            $_SESSION['message']=" Sorry Something Went Wrong !! Please Signup Again ...";
        }
    }


}
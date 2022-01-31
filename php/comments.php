<?php
session_start();
include "../db_conn.php";

if(isset($_POST['upload'])){
    
    // $user_id= $_SESSION['user_id'];
    $name = $_SESSION['name'];
    $content = $_POST['content'];
    $content = mysqli_real_escape_string($conn, $content);
    $content = htmlentities($content);
    // $image = $_FILES['image']["name"];   
    // $tempname = $_FILES['image']["tmp_name"];    
    //     $folder = "../upload/".$image;

    $sql1=  "SELECT * FROM users WHERE name='$name' ";
    $result1= mysqli_query($conn, $sql1);
    if(mysqli_num_rows($result1)>0){
        while($rows =mysqli_fetch_assoc($result1)){
            if($name === $_SESSION['name']){
                $users = $rows['id'];
                $_SESSION['user_id']=$users;
            }
        }
    }
    
    
    $sql1= "insert into comments(user_id, name, content) values('{$_SESSION['user_id']}' , '$name', '$content') ";
    // $sql= "insert into comments( name, content) values(' $name', '$content')";
    $result= mysqli_query($conn, $sql1);

    // if (move_uploaded_file($tempname, $folder))  {
    //     header("Location: ../reply.php");
    // }
header("Location: ../reply.php");
}
?>
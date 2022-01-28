<?php
session_start();
include "../db_conn.php";

if(isset($_POST['upload'])){

    $name = $_SESSION['name'];
    $content = $_POST['content'];
    $content = mysqli_real_escape_string($conn, $content);
    $content = htmlentities($content);
    $image = $_FILES['image']["name"];   
    // $filename = $_FILES['image']["name"];
    $tempname = $_FILES['image']["tmp_name"];    
        $folder = "../upload/".$image;

    $sql= "insert into posts(name, content, image) values('$name', '$content', '$image')";
    // $result= mysqli_query($conn, $sql);
    $result= mysqli_query($conn, SELECT * FROM posts);

    // move_uploaded_file($image['tmp_name'], "../upload/".$image['name']);
    if (move_uploaded_file($tempname, $folder))  {
        header("Location: ../index.php");
    }else{
        $msg = "Failed to upload image";
        echo $msg;
  }
}
?>
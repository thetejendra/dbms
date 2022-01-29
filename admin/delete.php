<?php 
session_start();
include "../db_conn.php";

if(isset($_GET['id'])){
    $sql =  "DELETE FROM posts WHERE id=' ".$_GET['id']." ' ";
	if($result = mysqli_query($conn , $sql)){
        header("Location: dashboard.php");
    }
}
?>
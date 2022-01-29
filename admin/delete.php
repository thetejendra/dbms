<?php 
session_start();
include "db_conn.php";

if(isset($_GET['id'])){
    if($sql= mysqli_query("DELETE FROM posts WHERE id=' ".$_GET['id']." ' ")){
        header("Location: dashboard.php");
    }
}
?>
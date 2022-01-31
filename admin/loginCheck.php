<?php 
session_start(); 
include "../db_conn.php";

if ($conn) {
if (isset($_POST['login'])) {


	$name = $_POST['name'];
    $name = mysqli_real_escape_string($conn, $name);
    $name= htmlentities($name);
	$password = $_POST['password'];
    $password = mysqli_real_escape_string($conn, $password);
    $password= htmlentities($password);
    
		$sql = "SELECT password FROM users WHERE name='$name' ";

		$result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_assoc($result);
        $user_id = $rows['id'];
        $pass = $rows['password'];
        if(password_verify($password, $pass)){
            $_SESSION['user_id']=$user_id;
            $_SESSION['name']=$name;
            header("Location: ../index.php");
            die;
        }
        else{
            header("Location: login.php");
                 $_SESSION['message']=" invalid Login Credentials";
        }
 }
}

 else{
	header("Location: login.php");
}
// }
 ?>
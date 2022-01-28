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
    // $password= password_hash($password, PASSWORD_BCRYPT);
    
		$sql = "SELECT password FROM users WHERE name='$name' ";

		$result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_assoc($result);
        $pass = $rows['password'];
        if(password_verify($password, $pass)){
            $_SESSION['name']=$name;
            // header("Location: dashboard.php");
            header("Location: ../index.php");
        }
        else{
            header("Location: login.php");
                 $_SESSION['message']=" invalid Login Credentials";
        }
        // if(mysqli_num_rows($result)){
        //    $rows = mysqli_fetch_assoc($result);
        //    if($rows['password']=== $pass){
	    //      header("Location: ../index.php");
        //    }else{
	    //      header("Location: login.php");
        //      $_SESSION['message']=" invalid Login Credentials";
        //    }
// else{
// 	header("Location: login.php");
// }
 }
}

 else{
	header("Location: login.php");
}
// }
 ?>
<?php 
session_start(); 
// include "/quora/db_conn.php";

$sname= "localhost";
$uname= "root";
$password = "";
$db_name = "quora";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if ($conn) {
if (isset($_POST['submit'])) {


	$uname = $_POST['username'];
	// $uname = mysqli_
	$pass = $_POST['password'];
	// $pass = password_hash($pass , PASSWORD_BCRYPT);
	// if(password_verify('password', $pass)){
	// 	echo "your password is correct";
	// }

	// if (empty($uname)) {
	// 	header("Location: login.php?error=User Name is required");
	//     exit();
	// }else if(empty($pass)){
    //     header("Location: login.php?error=Password is required");
	//     exit();
	// }else{
		$sql = "SELECT password FROM users WHERE username='$uname' ";

		$result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)){
           $rows = mysqli_fetch_assoc($result);
           if($rows['password']=== $pass){
	         header("Location: /quora/index.php");
           }else{
	         header("Location: /quora/login/login.php");
           }
// else{
// 	header("Location: login.php");
// }
 }
}

 else{
	header("Location: /quora/login/login.php");
}
}
 ?>
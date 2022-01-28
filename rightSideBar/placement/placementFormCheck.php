<?php
// include "../db_conn.php";

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "quora";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

if(isset($_POST['publish'])){
    $name = $_POST['name'];
    $company = $_POST['company'];
    $role = $_POST['role'];
    $name = mysqli_real_escape_string($conn, $name);
    $company = mysqli_real_escape_string($conn, $company);
    $role = mysqli_real_escape_string($conn, $role);
    $name= htmlentities($name);
    $company= htmlentities($company);
    $role= htmlentities($role);
    $image = $_FILES['image']["name"];   
    $tempname = $_FILES['image']["tmp_name"];    
        $folder = "placement_image/".$image;

        $sql= "insert into placement(name, company, role, image) values('$name', '$company', '$role', '$image')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: placement.php");
            $_SESSION['message']=" Successfully Registered";
            $_SESSION['name']=$name;
        }else{
            header("Location: placement.php");
            $_SESSION['message']=" Sorry Something Went Wrong !! Please Signup Again ...";
        }


}
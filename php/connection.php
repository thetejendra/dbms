<?php
if(isset($_POST['submit'])){
$conn = mysqli_connect('localhost','root','','quora');  
if($conn->connect_errno){                         
	echo 'Conection Error';
}
if(isset($_POST['submit'])) {
    foreach($_POST['ch_box'] as $i) {
        if($stmt = $conn->query("DELETE FROM contact WHERE id='".$i."'")){
          header("location:record.php");
        }
    }
}
}
?>
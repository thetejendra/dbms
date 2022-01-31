<?php 
session_start();
include "db_conn.php";
include "includes/header.php";
include "includes/navbar.php";
?>
<?php 

if(isset($_SESSION['name'])){
?>
	<!-- ---------- main-sidebar------------- -->
	<div class="main-content" onclick="clicked">


	   <?php
	// $user= $_SESSION['name'];
	$sql =  "SELECT * FROM comments ORDER BY id ASC ";
	$result = mysqli_query($conn , $sql);
	if(mysqli_num_rows($result)>0){
		while($rows =mysqli_fetch_assoc($result)){
	?>	   
	 <div class="post-container">
		 <div class="post-row">
			<div class="user-profile">
				<img src="image/profile-pic.png" >
				<div>
				<p>
					 <?php 
				echo $rows['name'];
					   ?>
					   </p>
					   <br>
					<span><?php echo $rows['commented_on'];?></span>
				</div>
			</div>
			<!-- <a href="#" download="photo" >Menu</a> -->
		 </div>

		<br>
		<p class="post-text"> <?php echo $rows['content'];?> </p>
	 </div>

	<? php
 } ?>

<?php 
	}}
	?>

<div class="write-post-container">
	<button type="submit" class="ayq">POST ANSWER</button>
	
	<?php
	// $user= $_SESSION['name'];
	// $sql =  "SELECT * FROM users where name='$name' ";
	// $result = mysqli_query($conn , $sql);
	// $rows =mysqli_fetch_assoc($result);
	?>
		 <div class="user-profile">
			 <img src="image/profile-pic.png" >
			 <div>
				 <p>
					 <?php 
					echo "<b>".$_SESSION['name'];"</b>"
					   ?>
					   </p>
			 </div>
		 </div>

		 <div class="post-input-container">
		 <div class="add-post-links">
			
			<form action="php/comments.php" method="post" enctype="multipart/form-data">
				<div>
					<textarea name="content" id="editor" placeholder="what's on your mind" required></textarea>
				  <!-- <label for="image">Photos/Video</label>
				  <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" multiple> -->
				</div>
				<div >
				  <button type="submit" name="upload" class="add_comment_btn">upload</button>
				</div>
			  </form>

		 </div>
			</div>
	 </div>
	<?php
include "includes/footer.php";
?>

<?php
}
else{
	$_SESSION['message']="Login to continue ";
	header("Location : admin/login.php");
}
?>
<?php 
session_start();
include "db_conn.php";
include "includes/header.php";
include "includes/navbar.php";
?>
<?php 

if(isset($_SESSION['name'])){


?>


<script src="/ckeditor/ckeditor/ckeditor.js"></script>

<div class="container">
	<!--------------- left-sidebar------------- -->
	<div class="left-sidebar" id="left-sidebar" >
		<div class="imp-links">
			<a href="rightSideBar/placement/placement.php"><img src="image/news.png" alt="">Placement Cell</a>
			<a href="#"><img src="image/friends.png" alt="">Institute Resources</a>		
			<a href="#"><img src="image/group.png" alt="">Questions</a>		
			<a href="#"><img src="image/marketplace.png" alt="">Polls</a>
			<a href="#"><img src="image/news.png" alt="">Tags</a>
		</div>
	</div>

	<!-- ---------- main-sidebar------------- -->
	<div class="main-content" onclick="clicked">

<div class="write-post-container">
	<button type="submit" class="ayq">Ask A Question</button>
	
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
			
			<form action="php/files.php" method="post" enctype="multipart/form-data">
				<div>
					<textarea name="content" id="editor" placeholder="what's on your mind"></textarea>
				  <label for="image">Photos/Video</label>
				  <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" multiple>
				</div>
				<div>
				  <input type="submit" name="upload" value="upload">
				</div>
			  </form>

		 </div>
			</div>
	 </div>

	 <div class="topic" style="cursor: pointer;">
		<input type="radio" name="topic1" id="">Recent Questions
		<input type="radio" name="topic1" id="">Most Answered
		<input type="radio" name="topic1" id=""> Most Visited
	   </div>


	   <?php
	// $user= $_SESSION['name'];
	$sql =  "SELECT * FROM posts ORDER BY id DESC ";
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
					<span><?php echo $rows['added_on'];?></span>
				</div>
			</div>
			<a href="#" download="photo" >Menu</a>
		 </div>

		<br>
		<p class="post-text"> <?php echo $rows['content'];?> </p>
		<img src="<?php echo $rows['image']; ?>" alt="image">

		<div class="post-row">
         <div class="activity-icons">
			 <div><img src="image/like-blue.png" alt="">1k</div>
			 <div><img src="image/comments.png" alt="">1k</div>
			 <div><img src="image/share.png" alt="">1k</div>
		 </div>
		 <div class="post-profile-icon">
			 <img src="image/profile-pic.png" >
		 </div>
		</div>
	 </div>

	<? php
 } ?>

<?php 
	}}
	?>


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
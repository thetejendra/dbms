<?php 
session_start();
include "db_conn.php";
include "includes/header.php";
include "includes/navbar.php";
?>
<?php 
	if(!isset($_SESSION['name'])){
	   header("Location: admin/login.php");
	}else{   

?>



	<!-- ---------- main-sidebar------------- -->
<div class="main-content" onclick="clicked">
	<div class="write-post-container">
	<button type="submit" class="ayq">Ask A Question</button>
		 <div class="user-profile">
			 <img src="image/profile-pic.png" >
			 <div>
				 <p><?php echo "<b>".$_SESSION['name'];"</b>" ?> </p>
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
				<p><?php echo $rows['name'];?> </p>
					   <br>
				<span><?php echo $rows['added_on'];?></span>
				</div>
			</div>
			<!-- <a href="#" download="photo" >Menu</a> -->
		 </div>
		<br>
		<p class="post-text"> <?php echo $rows['content'];?> </p>
		<img src="<?php echo $rows['image']; ?>" alt="image">

		<div class="post-row">
         <!-- <div class="activity-icons">
			 <div><img src="image/like-blue.png" alt="">1k</div>
			 <div><img src="image/comments.png" alt="">1k</div>
			 <div><img src="image/share.png" alt="">1k</div>
		 </div> -->
		</div>
	 </div>

	 <center> 
	<div class="reply">
		<form action="reply.php" method="post">
		 <button type="submit" name="reply">See All Reply </button>
		</form>
	</div>
	 </center>
	 <? php
 } ?>

<?php 
	}}
	?>


<?php
include "includes/footer.php";
?>
	</div>





<?php
}
// else{
// 	$_SESSION['message']="Login to continue ";
// 	header("Location : admin/login.php");
// }
?>
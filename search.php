<?php 
session_start();
include "db_conn.php";
include "includes/header.php";
include "includes/navbar.php";
?>
<script src="/ckeditor/ckeditor/ckeditor.js"></script>

<div class="container">
	<!--------------- left-sidebar------------- -->
	<div class="left-sidebar" id="left-sidebar">
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

		<?php
if(isset($_POST['search']) && isset($_POST['submit'])){
	$txtsearch = $_POST['search'];
	// $sql =  "SELECT * FROM posts ORDER BY id DESC ";
	$sql =  "SELECT * FROM posts where content LIKE '%$txtsearch%' ";
	$result = mysqli_query($conn , $sql);
	if(mysqli_num_rows($result)>0){
		while($rows =mysqli_fetch_assoc($result)){
			if($txtsearch== $rows['content'] ){
	?>
		<div class="post-container">
			<div class="post-row">
				<div class="user-profile">
					<img src="image/profile-pic.png">
					<div>
						<p>
							<?php 
				echo $rows['name'];
					   ?>
						</p>
						<br>
						<span>
							<?php echo $rows['added_on'];?>
						</span>
					</div>
				</div>
				<!-- <a href="#" download="photo" >Menu</a> -->
			</div>

			<br>
			<p class="post-text">
				<?php echo $rows['content'];?>
			</p>
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
					<!-- <input type="submit" value="See All Reply " name="reply"> -->
					<button type="submit" name="reply">See All Reply </button>
				</form>
			</div>
		</center>

<? php
 }}
?>
<?php 
	}
}}
else{
	header("Location: index.php");
}
	?>
		<?php
include "includes/footer.php";
?>
		<?php
}
// else{
// 	$_SESSION['message']="Login to continue ";
// 	header("Location : admin/login.php");
// }
?>
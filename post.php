<?php 
$user= $_SESSION['name'];
	$sql =  "SELECT * FROM posts ORDER BY name='$name' DESC ";
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
					<span><?php 
					 echo $rows['date'];
					   ?></span>
				</div>
			</div>
			<a href="#" download="photo" >Menu</a>
		 </div>

		<br>
		<p class="post-text">
		<?php 
				echo $rows['content'];
					   ?>
		</p>
		<img src="image/feed-image-1.png" class="post-img">

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
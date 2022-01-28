<? php
include('index.php');

if(isset($_POST['submit'])){
$con = mysqli_connect('localhost', 'root', '', 'test_db');
 $content = $_POST['editor'];
 $added_on = date('y-m-d h:i:s');

 $sql = "insert into content(content, added_on) values('$content', '$added_on')";
 mysqli_query($con, $sql);
 echo "Data Inserted";
}
?>


<script src="/ckeditor/ckeditor/ckeditor.js"></script>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Facebook| Home</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
<body>
<nav>
	<div class="nav-left" style="color: black;">
		<img src="image/logo.png" alt="logo" class="logo">
		<a href="/template/html/homePage.html" ><b> Home</b></a>
		<a href="/signup.html" > About Us</a>
		<a href="#" > Resources </a>
		<a href="#" > Feedback </a>

		<div id="dark-btn" class="dark-btn-on" >
			<span></span>
		</div>
	</div>
	</div>

	<div class="nav-right">
		<div class="search-box">
			<img src="image/search.png" alt="">
			<input type="text" placeholder="Search" >
		</div>
		<div class="nav-user-icon online" onclick="settingsMenuToggle()">
        <img src="image/profile-pic.png" alt="profile pic">
		</div>
	</div>

	<!------------- settings-menu------------- -->
	<div class="settings-menu">
		<div class="settings-menu-inner">
			<div class="user-profile">
				<img src="image/profile-pic.png" >
				<div>
					<p>Tejendra</p>
					<a href="template/userProfile.html">See your profile</a>
				</div>
			</div>
			<hr>
			<div class="user-profile">
				<img src="image/feedback.png" >
				<div>
					<p>Feedback</p>
					<a href="#">Give your feedback</a>
				</div>
			</div>
            <hr>
			<div class="settings-links">
				<img src="image/setting.png" class="settings-icon">
				<a href="#">Setting & Privacy <img src="image/arrow.png" width="10px"></a>
			</div><hr>
			<form action="/login/logout.php" method="post">
			<center>
			<div class="logout">
				<button type="submit" onclick="logout.php">Logout</button>
			</div></center>
			</form>
		</div>
	</div>
</nav>

<div class="container">
	<!--------------- left-sidebar------------- -->
	<div class="left-sidebar" id="left-sidebar" >
		<div class="imp-links">
			<a href="/template/html/contact.html"><img src="image/news.png" alt="">Home</a>
			<a href="#"><img src="image/friends.png" alt="">Communities</a>		
			<a href="#"><img src="image/group.png" alt="">Questions</a>		
			<a href="#"><img src="image/marketplace.png" alt="">Polls</a>
			<a href="#"><img src="image/news.png" alt="">Tags</a>
			<a href="#"><img src="image/news.png" alt="">Badges</a>
			<a href="#"><img src="image/news.png" alt="">Users</a>
			<a href="#"><img src="image/news.png" alt="">Help</a>
		</div>
	</div>

	<!-- ---------- main-sidebar------------- -->
	<div class="main-content" onclick="clicked">

<div class="write-post-container">
	<button type="submit" class="ayq">Ask A Question</button>
	<? php

	$id = $_GET['id'];
	$name = $_GET['name'];
	$query = mysqli_query($con , "SELECT * FROM users where id='$id' ");
while($r =mysqli_fetch_array($query) ){
	?>
		 <div class="user-profile">
			 <img src="image/profile-pic.png" >
			 <div>
				 <p><?php echo $r['name']; ?></p>
			 </div>
		 </div>

		 <div class="post-input-container">
		 <div class="add-post-links">
			
			<form method="post" enctype="multipart/form-data">
				<div>
					<textarea name="editor" id="editor" placeholder="ask your question ??"></textarea>
				  <label for="image_uploads">Photos/Video</label>
				  <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple>
				</div>
				<div class="preview">
				  <p>No files currently selected for upload</p>
				</div>
				<div>
				  <input type="submit" name="submit">
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
	 <div class="post-container">
		 <div class="post-row">
			<div class="user-profile">
				<img src="image/profile-pic.png" >
				<div>
				<p><?php echo $r['name']; ?></p>
					<span><input type="datetime-local" name="date" id=""></span>
				</div>
			</div>
			<a href="#" download="photo" >Menu</a>
		 </div>

		<br>
		<p class="post-text">
			Happy Birthday Tejendra , many many Happy returns of the day 
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

	 <div class="post-container">
		 <div class="post-row">
			<div class="user-profile">
				<img src="image/profile-pic.png" >
				<div>
				<p><?php echo $r['name']; ?></p>
					<span><?php echo $_POST['added_on']; ?></span>
				</div>
			</div>
			<a href="#" download="photo" >Menu</a>
		 </div>

		<br>
		<p class="post-text">
			Happy Birthday Tejendra , many many Happy returns of the day 
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

	 <div class="post-container">
		 <div class="post-row">
			<div class="user-profile">
				<img src="image/profile-pic.png" >
				<div>
					<p>Tejendra</p>
					<span>July 1, 2021, 12:00 am</span>
				</div>
			</div>
			<a href="#" download="photo" >Menu</a>
		 </div>

		<br>
		<p class="post-text">
			Happy Birthday Tejendra , many many Happy returns of the day 
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
	</div>

	<? php
 } ?>

	<!--------------------right-sidebar------------- -->
	<div class="right-sidebar" id="right-sidebar">
		<div class="sidebar-title">
			<h4>Events</h4>
			<a href="#">See All</a>
		</div>
		<div class="events">
			<div class="left-event">
				<h3>1</h3>
				<span>July</span>
			</div>
			<div class="right-event" style="text-align: right;">
				<h4>Birthday</h4>
				<p>Tejendra Kanwar</p>
				<a href="#"> More Info</a>
			</div>
		<div class="events">
			<div class="left-event">
				<h3>6</h3>
				<span>July</span>
			</div>
			<div class="right-event" style="text-align: right;">
				<h4>Birthday</h4>
				<p>Tejendra Kanwar</p>
				<a href="#"> More Info</a>
			</div>
		</div>
		<br>
		<div class="sidebar-title">
			<h4>Advertisements</h4>
			<a href="#">Close</a>
		</div>
		<img src="image/advertisement.png" class="sidebar-ads">
		<div class="sidebar-title">
			<h4>Conversation</h4>
			<a href="#">Hide chat</a>
		</div>
		<div class="online-list">
			<div class="online">
				<img src="image/member-1.png" alt="">
			</div>
			<p>Tejendra</p>
		</div>
		<div class="online-list">
			<div class="online">
				<img src="image/member-2.png" alt="">
			</div>
			<p>Ritik</p>
		</div>
		<div class="online-list">
			<div class="online">
				<img src="image/member-3.png" alt="">
			</div>
			<p>Rahul</p>
		</div>
	</div>

	<div class="footer">
		<p>Copyright 2021 - Tejendra Kanwar</p>
	</div>
</div>

<!-- ----java-script---- -->
<script src="script.js">
	CKEDITOR.replace('editor');
</script>
</body>
</html>
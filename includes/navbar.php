<nav>
	<div class="nav-left" style="color: black;">
		<img src="image/logo.png" alt="logo" class="logo">
		<a href="index.php" ><b> Home</b></a>

		<div id="dark-btn" class="dark-btn-on" >
			<span></span>
		</div>
	</div>
	</div>

	<form action="search.php" method="post">
<!-- <div class="search-box"> -->
	<!-- <input type="text" placeholder="Search" > -->
	<!-- <input type="text" id="search" placeholder="Search" id="search"> -->
	<textarea name="search" id="search" placeholder="search" required></textarea>
	<!-- <input type="submit"><a href="search.php"><img src="image/search.png" alt=""></a> -->
	<button type="submit" name="submit" ><img src="image/search.png" alt=""></button>
	
<!-- </div> -->
</form>
<div id="display"></div>

	<div class="nav-right">
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
					<p> <?php echo $_SESSION['name']; ?></p>
					<a href="admin/dashboard.php">See your profile</a>
				</div>
			</div>
			<hr>
			<div class="user-profile">
				<img src="image/feedback.png" >
				<div>
					<p>Feedback</p>
					<a href="../php/feedback.php">Give your feedback</a>
				</div>
			</div>
            <hr>
			<div class="settings-links">
				<img src="image/setting.png" class="settings-icon">
				<a href="#">Setting & Privacy <img src="image/arrow.png" width="10px"></a>
			</div><hr>
			<center>
			<div class="logout" style="cursor: pointer;">
            <form action="admin/logout.php" method="post">
				<button type="submit" onclick="admin/logout.php" name="logout">Logout</button>
                <!-- <input type="submit" value="Logout" name="logout"> -->
                </form>
			</div>
		    </center>
		</div>
	</div>
</nav>
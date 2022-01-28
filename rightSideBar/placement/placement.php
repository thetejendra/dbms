<?php 
session_start();
include "db_conn.php";
if(isset($_SESSION['name'])){


?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Placement</title>
    <link rel="stylesheet" href="placementPost.css">
    <link rel="stylesheet" href="placement.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
     <!-- <script src="../script.js"> -->
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">SocialBook</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Placement</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="placementForm.php">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Placement Form</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Placement</span>
      </div>
<form action="" method="post">
      <div class="search-box">
        <input type="text" id="search" placeholder="Search...">
        <i class='bx bx-search' ></i>
        </form>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name"><?php echo $_SESSION['name']; ?></</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content" style="background: black;">

      <!-- <div class="sales-boxes" > -->

<?php 
	$sql =  "SELECT * FROM placement ORDER BY id DESC ";
	$result = mysqli_query($conn , $sql);
	if(mysqli_num_rows($result)>0){
	while($rows =mysqli_fetch_assoc($result)){
	?>
    <div class="container1">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                    <img src="placement_image/image1.jpg">
                    </div>
                    <h3 class="title"><?php
                    echo $rows['name'];
                    ?>
                    </h3>
                    <span class="post"><?php
                    echo $rows['role'];
                    ?></span>
                    <span> company :<?php
                    echo $rows['company'];
                    ?></span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>          

    </div>
    </div>

    <?php 
	}}
	?>
  </div>
    
    <div class="top-sales box">

    <?php 
	$sql =  "SELECT * FROM placement ORDER BY name='$name' DESC ";
	$result = mysqli_query($conn , $sql);
	if(mysqli_num_rows($result)>0){
	while($rows =mysqli_fetch_assoc($result)){
	?>
    <div class="container1">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                    <img src="<?php echo $rows['image']; ?>">
                    </div>
                    <h3 class="title"><?php
                    echo $rows['name'];
                    ?>
                    </h3>
                    <span class="post"><?php
                    echo $rows['role'];
                    ?></span>
                    <span> company :<?php
                    echo $rows['company'];
                    ?></span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>          

    </div>
    </div>

    <?php 
	}}
	?>
      </div>
  </section> 

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
<?php
}
else{
	$_SESSION['message']="Login to continue ";
	header("Location : ../admin/login.php");
}
?>

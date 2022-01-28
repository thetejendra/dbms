<!-- <?php
// session_start();
// if(isset($_SESSION['name'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="placementPost.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body >

    <h1 style="color: white">Placement Update</h1> -->
<?php 
	$sql =  "SELECT * FROM placement ORDER BY name='$name' DESC ";
	$result = mysqli_query($conn , $sql);
	if(mysqli_num_rows($result)>0){
	while($rows =mysqli_fetch_assoc($result)){
	?>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                    <img src="placement_image/image1.jpg">
                    </div>
                    <h3 class="title"><?php
                    echo $rows['name'];
                    // echo "teju";
                    ?>
                    </h3>
                    <span class="post"><?php
                    // echo "web developer";
                    echo $rows['role'];
                    ?></span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
     
            <!-- <div class="col-md-3 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="placement_image/image1.jpg">
                    </div>
                    <h3 class="title">Kristiana</h3>
                    <span class="post">Web Designer</span>
                    <ul class="social">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div> -->
    
        </div>
    </div>
</body>
</html>
<?php
          if($stmt = $conn->query("SELECT * FROM signup  ORDER BY id DESC")) {
              $ctr = 0;
                
              while($r = $stmt->fetch_array(MYSQLI_ASSOC)) {  
             $ctr++;

        //  if($stmt = $conn->query("SELECT * FROM signup WHERE doj BETWEEN $from AND $to ORDER BY id DESC")) {*/
            header("location:demo.php");
while($ctr != 0){

    ?>

<div class="post-container">
        <div class="post-row">
           <div class="user-profile">
               <img src="image/profile-pic.png" >
               <div>
                   <!-- <p>Tejendra</p> -->
                   <p> <?php if(isset($r['name'])) {echo $r['name']; } ?> </p>
                   <span><?php if(isset($r['date'])) {echo $r['date']; } ?> </span>
               </div>
           </div>
           <a href="#" download="photo" >Menu</a>
        </div>

       <br>
       <p class="post-text">
           <?php if(isset($r['input'])) {echo $r['input']; } ?>
       </p>
       <img <?php if(isset($r['image'])) {echo $r['image']; } ?> class="post-img">

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


    <?php
    }
    ?>